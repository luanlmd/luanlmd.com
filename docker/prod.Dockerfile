FROM denoland/deno:1.36.1

WORKDIR /src

ADD src /src/

RUN deno task cache

CMD ["deno", "task", "run"]
