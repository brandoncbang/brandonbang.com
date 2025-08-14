import { secrets, randomSecret } from "/js/secrets.js";

export default function setUpTerminal() {
  const root = document.querySelector("[data-terminal]");

  const outputElement = root.querySelector('[data-ref="output"]');
  const inputElement = root.querySelector('[data-ref="input"]');

  document.addEventListener("keydown", (e) => {
    if (e.key === "`") {
      document.body.classList.add("h-screen");
      root.classList.remove("hidden");
    }
    if (e.key === "Escape") {
      document.body.classList.remove("h-screen");
      root.classList.add("hidden");
    }
  });
  document.addEventListener("keyup", (e) => {
    if (e.key === "`") {
      inputElement.focus();
    }
  });

  inputElement.addEventListener("input", (e) => {
    inputElement.size = inputElement.value.length;
  });

  inputElement.addEventListener("keydown", (e) => {
    if (e.key !== "Enter") {
      return;
    }

    print(`${inputElement.value}\n`);

    handleInput(inputElement.value);

    inputElement.value = "";
    inputElement.size = 8;
  });

  const print = (s) => {
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
    echo(...args) {
      print(`${args.join(" ")}\n`);
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

        secrets[args[0]]();
        return;
      }

      print(`Loading secret...\n`);
      randomSecret();
    },
  };

  const handleInput = (input) => {
    const [command, args] = parse(input);

    if (command in commands) {
      commands[command](...args);
    } else if (command !== "") {
      print(`${command}: command not found\n`);
    }

    print(`${prompt}`);
  };

  print(`Welcome to the super secret terminal!\n${prompt}`);
}
