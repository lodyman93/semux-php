FROM openjdk:8-jre

WORKDIR /

RUN apt-get update && apt-get install --yes curl

RUN LINK=https://github.com/semuxproject/semux/releases/download/v1.2.0/semux-linux-1.2.0-47a74b7.tar.gz && \
    TARBALL=semux-linux-1.2.0-47a74b7.tar.gz && \
    curl -Lo ${TARBALL} ${LINK} && \
    mkdir -p /semux && \
    tar -xzf ${TARBALL} -C /semux --strip-components=1 && \
    rm ${TARBALL}

COPY ./database /semux/database