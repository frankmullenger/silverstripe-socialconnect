<% require css(socialconnect/css/SocialConnect.css) %>

<% control SocialConnections %>
  <a href="$LinkURL" title="$Title" rel="nofollow" target="_blank">
    <img src="socialconnect/images/{$Type}.png" alt="$Title" />
  </a>
<% end_control %>

