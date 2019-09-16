# de qual imagem
FROM nginx:latest
# marca o nome do mantenedor
LABEL maintainer="Cristian de Mellos"
# cria um arquivo '/usr/share/nginx/html/conteudo.html' contendo '<h1>Sem conteudo</h1>'
RUN echo '<h1>Sem conteudo</h1>' > /usr/share/nginx/html/conteudo.html
# copia todos arquivos com a extensão html da pasta atual e cola na pasta /usr/share/nginx/html/ da imagem
COPY *.html /usr/share/nginx/html/