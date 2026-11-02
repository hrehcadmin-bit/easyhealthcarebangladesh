# Easy Healthcare frontend

## Deploy to cPanel on push

The `Deploy frontend to cPanel` GitHub Actions workflow deploys the contents of this repository to the configured cPanel document root whenever a commit is pushed to `main`. It can also be started manually from the repository's **Actions** tab.

Add these repository actions secrets under **Settings → Secrets and variables → Actions**:

- `CPANEL_SSH_HOST`: cPanel server SSH hostname.
- `CPANEL_SSH_PORT`: SSH port provided by the hosting company.
- `CPANEL_SSH_USER`: cPanel SSH username.
- `CPANEL_SSH_PRIVATE_KEY`: private key for a deployment key whose public key is authorized in cPanel.
- `CPANEL_SSH_KNOWN_HOSTS`: verified SSH host-key line for the server and port.
- `CPANEL_DOCUMENT_ROOT`: absolute path to the website document root, such as the path shown for the domain in cPanel.

Verify the server host-key fingerprint with the hosting company before saving its host key. Keep the SSH private key and all access details out of Git and chat. Use a deployment account/key with only the permissions needed to write to the website document root.

The workflow extracts updated files into the document root without deleting files already on the server. Review the first deployment and confirm that the document root is correct.

To keep the backend out of this frontend repository, initialize and push the repository from the `frontend` directory. After the initial push to `main`, add the secrets above and run the workflow from **Actions** to test deployment.
