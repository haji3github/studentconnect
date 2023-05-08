const clientId = 'e74dcc979eaaa9a0c5fa';
const redirectUri = 'https://stdconnect.azurewebsites.net/';

function redirectToAuth() {
  const authUrl = `https://github.com/login/oauth/authorize?client_id=${clientId}&redirect_uri=${redirectUri}`;
  window.location.href = authUrl;
}

async function getAccessToken(code) {
  const response = await fetch('https://github.com/login/oauth/access_token', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      Accept: 'application/json'
    },
    body: JSON.stringify({
      client_id: clientId,
      client_secret: '26dd654c6cbe16e88c7f11520481d43f6137ec5d',
      code: code,
      redirect_uri: redirectUri
    })
  });

  const data = await response.json();
  return data.access_token;
}

async function getUserData(accessToken) {
  const octokit = new Octokit({
    auth: accessToken
  });

  const { data } = await octokit.users.getAuthenticated();
  return data;
}
