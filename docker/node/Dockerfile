FROM node:12.4-alpine

WORKDIR /var/www
# COPY package.json .

EXPOSE 8090

ENV NUXT_HOST=0.0.0.0

ENV NUXT_PORT=8090

CMD ["sh", "-c", "yarn install && yarn dev"]