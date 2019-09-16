FROM python:3.6
LABEL maintainer="Cristian de Mellos <cristian.ms@hotmail.com>"

# bash comand concatenado
# adiciona um novo usuário 'www'
# cria um diretorio app
# cria um diretorio log
# informa que o user www é o dono da pasta log
RUN useradd www && \
    mkdir /app && \
    mkdir /log && \
    chown www /log

# seta o usuário que estará logado na execução 
USER www
# define volume que aponta para a pasta de log
VOLUME [ "/log" ]
# define diretorio de trabalho, 
WORKDIR /app
# expoe a porta 8000, que poderá ser mapeada
EXPOSE 8000

# ponto de entrada, processo que será executado ao iniciar o container
ENTRYPOINT [ "/usr/local/bin/python" ]
# comando que será executado pelo processo ENTRYPOINT
CMD [ "run.py" ]