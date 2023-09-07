ARG NODEJS_VERSION

FROM node:${NODEJS_VERSION}-bookworm-slim

WORKDIR /app

COPY dev.entrypoint.sh /dev.entrypoint.sh
RUN chmod +x /dev.entrypoint.sh

USER node

ENTRYPOINT ["/dev.entrypoint.sh"]
