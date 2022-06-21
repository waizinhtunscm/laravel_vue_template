FROM node:12.4-alpine

WORKDIR /var/www
COPY . .

EXPOSE 8090

ENV NUXT_HOST=0.0.0.0

ENV NUXT_PORT=8090

CMD ["sh", "-c", "yarn cache clean && yarn install && yarn dev"]