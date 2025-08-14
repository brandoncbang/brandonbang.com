import { secrets, randomSecret } from "./secrets.js";

export default function setUpTerminal() {
  const root = document.querySelector("[data-terminal]");

  const outputElement = root.querySelector('[data-ref="output"]');
  const inputElement = root.querySelector('[data-ref="input"]');

  let open = false;

  const closeTerminal = () => {
    outputElement.innerText = "";
    document.body.classList.remove("h-screen");
    root.dataset.open = "false";

    open = false;
  };

  document.addEventListener("keydown", (e) => {
    if (!open && e.key === "`") {
      document.body.classList.add("h-screen");
      root.dataset.open = "true";

      open = true;

      print(`Welcome to the super secret terminal!\n`);
      print(`${prompt}`);
    }
    if (open && e.key === "Escape") {
      closeTerminal();
    }
  });
  document.addEventListener("keyup", (e) => {
    if (open && e.key === "`") {
      inputElement.focus();
    }
  });

  inputElement.addEventListener("input", (e) => {
    resizeInputElement();
  });

  const resizeInputElement = () => {
    inputElement.size =
      inputElement.value.length > 0 ? inputElement.value.length : 8;
  };

  inputElement.addEventListener("keydown", (e) => {
    if (e.key === "ArrowUp") {
      e.preventDefault();

      if (previousCommands.length === 0) {
        return;
      }

      previousCommandIdx = Math.min(
        previousCommandIdx + 1,
        previousCommands.length - 1,
      );

      inputElement.value = previousCommands[previousCommandIdx];
      resizeInputElement();

      root.scrollTo(0, root.scrollHeight);
    }
    if (e.key === "ArrowDown") {
      e.preventDefault();

      previousCommandIdx = Math.max(previousCommandIdx - 1, -1);

      if (previousCommandIdx === -1) {
        inputElement.value = "";
        resizeInputElement();

        return;
      }

      inputElement.value = previousCommands[previousCommandIdx];
      resizeInputElement();

      root.scrollTo(0, root.scrollHeight);
    }
    if (e.key === "Enter") {
      print(`${inputElement.value}\n`);

      handleInput(inputElement.value);

      inputElement.value = "";
      resizeInputElement();

      root.scrollTo(0, root.scrollHeight);
    }
  });

  const print = (s) => {
    if (!outputElement.checkVisibility()) {
      return;
    }

    outputElement.innerText += s;

    root.scrollTo(0, root.scrollHeight);
  };

  const prompt = `guest@brandonbang.com:~$ `;

  /** @param {string} input */
  const parse = (input) => {
    const [command, ...args] = input.split(" ");

    return [command, args];
  };

  const commands = {
    clear() {
      outputElement.innerText = "";
    },
    coffee() {
      location.href = "https://terminal.shop";
    },
    echo(...args) {
      print(`${args.join(" ")}\n`);
    },
    exit() {
      closeTerminal();
    },
    help() {
      print(`Available commands:\n`);

      for (const command of Object.keys(this)) {
        print(`${command}\n`);
      }
    },
    secret(...args) {
      if (args.includes("-h")) {
        print(`secret: secret [-h] [name ...]\n`);
        print(`Load a secret.\n\n`);
        print(`If NAME is specified, loads a secret by that name.\n`);
        print("\n");
        print(`Options:\n`);
        print(`  -h      Display this help message\n`);
        print("\n");
        print(`Arguments:\n`);
        print(`  NAME    Name of a secret to load\n`);
        return;
      }

      if (args.length > 0) {
        if (!(args[0] in secrets)) {
          secrets["notFound"]();
          return;
        }

        print(`Loading secret "${args[0]}"...\n`);
        secrets[args[0]]();

        return;
      }

      print(`Loading secret...\n`);
      randomSecret();
    },
  };

  let previousCommands = [];
  let previousCommandIdx = -1;

  const handleInput = (input) => {
    const [command, args] = parse(input);

    if (command in commands) {
      commands[command](...args);

      previousCommands = [input, ...previousCommands];
      previousCommandIdx = -1;
    } else if (command !== "") {
      print(`${command}: command not found\n`);
    }

    print(`${prompt}`);
  };
}
