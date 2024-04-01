FROM denoland/deno:1.42.1

WORKDIR /src

# CMD ["deno", "run", "-A", "index.ts"]
CMD ["deno", "task", "start"]
