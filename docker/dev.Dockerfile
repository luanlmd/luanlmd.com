FROM denoland/deno:1.36.1

WORKDIR /src

# CMD ["deno", "run", "-A", "index.ts"]
CMD ["deno", "task", "start"]
