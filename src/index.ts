import { serveDir } from "@std/http/file-server";

Deno.serve((req) => {
    return serveDir(req, {
        fsRoot: "www",
    });
});
