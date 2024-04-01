FROM denoland/deno:1.42.1

WORKDIR /src

ADD src /src/

RUN deno task cache

CMD ["deno", "task", "run"]
