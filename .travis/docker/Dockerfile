FROM openjdk:8-jre

WORKDIR /

RUN apt-get update && apt-get install --yes curl

RUN LINK=https://github.com/semuxproject/semux-core/releases/download/v1.3.0/semux-linux-1.3.0-8b4f140.tar.gz && \
    TARBALL=semux-linux-1.3.0-8b4f140.tar.gz && \
    curl -Lo ${TARBALL} ${LINK} && \
    mkdir -p /semux && \
    tar -xzf ${TARBALL} -C /semux --strip-components=1 && \
    rm ${TARBALL}

COPY ./database /semux/database
