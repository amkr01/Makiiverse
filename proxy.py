from http.server import BaseHTTPRequestHandler, HTTPServer

TARGET_URL = "https://yosmakii99.github.io/full-miiverse-files/"

class ProxyHandler(BaseHTTPRequestHandler):
    def do_GET(self):
        self.send_response(302)  # Redirección
        self.send_header('Location', TARGET_URL)
        self.end_headers()

def run(server_class=HTTPServer, handler_class=ProxyHandler):
    server_address = ('', 8080)  # Puerto 8080
    httpd = server_class(server_address, handler_class)
    print("Proxy corriendo en http://0.0.0.0:8080")
    httpd.serve_forever()

if __name__ == "__main__":
    run()