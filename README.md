# fairplus-project.eu

This is the source code used to build our website: https://fairplus-project.eu/

**DISCLAIMER:**

**This repo is here for the purpose of 1) public backup, and 2) sharing how the website works.**

**This is NOT a place for issues, pull requests.**

**Please contact Hannah Hurst at hannah.hurst@elixir-europe.org, or Martin Cook at martin.cook@elixir-europe.org, for any questions, suggestions, etc.**


## Testing locally

It is implemented in php, but intended to stay simple. If you want to deploy the website locally, why not try Docker with docker-compose ([how to get docker](https://docs.docker.com/get-docker/))?

```
git clone https://github.com/FAIRplus/fairplus-project.eu
cd fairplus-project.eu
docker-compose up --build
```

You can visit http://localhost/ now to see the website.

If you edit any file, stop the previous process (usually Ctrl + C), then execute again:

```
docker-compose up --build
```

to always see the most up-to-date version.

## Contributors

* Martin Cook
