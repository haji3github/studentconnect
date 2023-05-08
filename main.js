const urlParams = new URLSearchParams(window.location.search);
const code = urlParams.get('code');

if (!code) {
  redirectToAuth();
} else {
  getAccessToken(code)
    .then(getUserData)
    .then((data) => {
      const username = data.login;
      const avatarUrl = data.avatar_url;
      const userProfileLink = data.html_url;

      // Modify your HTML to display the user profile data
      const userProfile = document.getElementById('user-profile');
      const avatar = document.getElementById('avatar');
      const usernameElem = document.getElementById('username');
      const profileLink = document.getElementById('profile-link');

      avatar.src = avatarUrl;
      usernameElem.innerText = username;
      profileLink.href = userProfileLink;
    })
    .catch((error) => {
      console.error(error);
    });
}
