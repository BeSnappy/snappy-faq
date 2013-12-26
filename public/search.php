<?php include("_header.php"); ?>

  <div class="content search">

    <h1>Search Results</h1>

    <dl class="search-results">
      <dt id="custom-contact-lookup-642" name="custom-contact-lookup-642">
        <a href="topic.php#custom-contact-lookup-642" class="permalink expand" title="Link directly to this section">
          How do I use the custom contact lookup application? <span>#</span>
        </a>
      </dt>
      <dd>
        <p>The custom contact application allows you to load customized contact information from any third-party system. The application settings window accepts two options: <strong>URL</strong> and <strong>Token</strong></p>

        <p><strong>URL</strong>: This is the URL that will be called when a contact lookup request is performed. The HTML returned from this URL will be displayed in the custom contact lookup window.</p>

        <p><strong>Token</strong>: You may specify a random "token" string that will be passed to the URL as the "token" POST field. You may use this token to verify that the lookup request is actually from Snappy.</p>

        <p>After activating the application, you will see an icon for your custom contact application in the contact detail window, which may be opened by clicking on any contact name or e-mail address on a ticket.</p>

        <ul class="attachments" id="custom-contact-lookup-642-attachments">
          <li><a href="#">Pencil.brush</a></li>
          <li><a href="#">help-document.pdf</a></li>
        </ul>


        <div class="read-more"><a href="#" class="expand">Read More</a></div>
      </dd>

      <dt id="test-2" name="test-2">
        <a href="topic.php#test-2" class="permalink" title="How can I use my own email domain?">
          How can I use my own email domain? <span>#</span>
        </a>
      </dt>
      <dd>
        <p>You can forward emails from your existing email accounts into Snappy. For this to work your mail server will need to support the proper email forwarding headers, most modern mail servers do including Gmail and Exchange.</p>

        <p>Using your existing email accounts provides a seamless transition for customers. In addition, since you're only forwarding the email to Snappy your mail server will maintain a copy of the original emails as well.</p>

        <h4>Gmail</h4>

        <ol><li>Go to <strong>Settings</strong> then <strong>forwarding and pop/imap</strong></li>
          <li>At the top click <strong>add a forwarding address</strong></li>
          <li>Add your Snappy email</li>
          <li>Gmail will send a verification email into Snappy, check your Snappy inbox and verify</li>
          <li>In Gmail select the radio button to enable forwarding to your verified Snappy mailbox</li>
        </ol><h4>Office 365</h4>

        <ol><li>Click the <strong>Cogwheel</strong> in the top right corner, choose <strong>Options</strong></li>
          <li>Make sure <strong>Account</strong> is selected in the left nav, click **Forward your email* in the right navigation</li>
          <li>Add your Snappy email and click the <strong>Start Forwarding</strong> button</li>
        </ol><h4>Exchange/Outlook Web Mail</h4>

        <p>Exchange supports several methods of forwarding. The most simple is to use mail rules which can be setup from Outlook/Web mail.</p>

        <ol><li>Go to <strong>Options</strong> then <strong>Create an inbox rule</strong></li>
          <li><strong>New</strong> then for "when message arrives" you will usually apply it to all messages</li>
          <li>For "do the following" select to redirect the message and enter your Snappy email address</li>
          <li><strong>Save</strong> the changes</li>
        </ol><h4>Outbound</h4>

        <p>The final step is to edit your Mailbox in Snappy (Account-&gt;Mailboxes) and set the "from address" to the email address you'd like to appear to customers as the FROM.</p>

        <div class="read-more"><a href="#" class="">Read More</a></div>
      </dd>
      <dt id="test-3" name="test-3">
        <a href="topic.php#test-3" class="permalink" title="How do I pay for service?">
          How can I use my own email domain? <span>#</span>
        </a>
      </dt>
      <dd>Yes, you can simply reply to any notification email Snappy sends and the reply will be logged in Snappy and forwarded on to the customer. There's no need...</dd>
      <dt id="test-4" name="test-4">
        <a href="topic.php#test-3" class="permalink" title="How do I use the custom contact lookup application?">
          How do I use the custom contact lookup application? <span>#</span>
        </a>
      </dt>
      <dd>The custom contact application allows you to load customized contact information from any third-party system. The application settings window accepts two...</dd>
    </dl>

  </div>

<?php include("_footer.php"); ?>
