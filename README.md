O **Book Wise** é uma aplicação web desenvolvida para explorar e gerenciar livros de forma eficiente.


## **Como Configurar o Projeto**

### 1. Clonar o Repositório
Para começar, clone o repositório do projeto em sua máquina local. Execute o seguinte comando no terminal:

```bash
git clone https://github.com/seu-usuario/bookwise.git
```

### 2. Iniciar o Servidor com Docker
O projeto utiliza Docker para facilitar a configuração e execução. Siga os passos abaixo:

1. **Construa a imagem Docker**:
   Execute o seguinte comando para criar a imagem do projeto:

   ```bash
   docker build -t bookwise .
   ```

2. **Execute o contêiner**:
   Após construir a imagem, inicie o contêiner com o seguinte comando:

   ```bash
   docker run -p 80:80 bookwise
   ```

   Isso irá rodar a aplicação na porta **80** do seu localhost.

---

## **Próximos Passos**
- Acesse a aplicação no navegador: `http://localhost:8080.


