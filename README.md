## Comenzando **🚀**

### **Pre-requisitos 📋**

[Git](https://git-scm.com/)

[Docker](https://www.docker.com/)

[VsCode](https://code.visualstudio.com/)

### Plugins de VsCode 🤖

[Container-Remote](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)

### **Instalación 🔧**

1. Clonaremos el proyecto en tu entorno local

    ```bash
    git clone https://github.com/cheems-dev/api.git
    ```

2. Abriremos vscode

    ```bash
    code api
    ```

    o también

    ```bash
    cd api && code .
    ```

3. Abrir **_.devcontainer_**

    1. Utiliza el atajo de teclado \*Ctrl+shitt+P y coloca en la barra **">Remote-Containers:">Remote-Containers:Reopen in Container"\***
    2. Da click en

        ![Vscode](https://camo.githubusercontent.com/bf6e754a18e00e3fca1751c0ba01ad33d360fade6c3dc74e009e31d9c632fc14/68747470733a2f2f636f64652e76697375616c73747564696f2e636f6d2f6173736574732f626c6f67732f323031392f31302f30332f72656d6f74652d657874656e73696f6e2d636f6d6d616e64732e706e67)

        y selecciona la opcion **_"Reopen in Container"_**

4. Añade .env a tu proyecto
    ```bash
    cp .env.example .env
    ```
5. Instalar dependencias

    1. ```bash
       composer install && composer migrate
       ```

6. Por ultimo, lanzamos el proyecto en entorno local. **_Happy coding_** 🍻

    ```bash
    ./vendor/bin/sail up
    ```

## **Construido con 🛠️**

---

-   Laravel
-   Laravel Sail
-   Docker

## **Autores ✒️**

---

-   Luis Ccalluchi - _Documentación y desarrollo_ - [cheems-dev](https://github.com/cheems-dev)

## **Licencia 📄**

---

Este proyecto está bajo la LICENCIA MIT

## **Expresiones de Gratitud 🎁**

-   Comenta a otros sobre este proyecto 📢
-   Invita una cerveza 🍺 o un café ☕ a alguien del equipo.
-   Da las gracias públicamente 🤓.
