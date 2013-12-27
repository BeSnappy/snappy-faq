<?php include("_header.php"); ?>

	<!-- Content -->
	<div class="content home">

      <div class="intro">
        <h1>MyCompany Help Center</h1>
        <p>This <kbd>.intro</kbd> div will be inserted from the Account Settings -> Faq -> Description field inside Snappy. This allows you to put any text you want here.</p>
        <p>The topics below will be any that you have featured inside Snappy.</p>
        <h2>Common Questions</h2>
      </div>

      <dl class="home-featured">
        <dt id="my-other-first-topic-14" name="my-other-first-topic-14">
          <a href="topic.php#custom-contact-lookup-642" class="permalink" title="Link directly to this section">
             How can I use my own email domain?
            <span>#</span>
          </a>
        </dt>
        <dd>
          <p>You can forward emails from your existing email accounts into Snappy. For this to work your mail server will need to support the proper email forwarding headers, most modern mail servers do including Gmail and Exchange.</p>

          <p>Using your existing email accounts provides a seamless transition for customers. In addition, since you're only forwarding the email to Snappy your mail server will maintain a copy of the original emails as well.</p>
          <div class="read-more"><a href="#" class="expand">Read More</a></div>
        </dd>
        <dt>
          <a href="topic.php" class="permalink" title="Link directly to this section">How do I pay for service? <span>#</span></a>
        </dt>
        <dd>
          Yes, you can simply reply to any notification email Snappy sends and the reply will be logged in Snappy and forwarded on to the customer. There's no need...
          <div class="read-more"><a href="#" class="expand">Read More</a></div>
        </dd>
        <dt>
          <a href="topic.php" class="permalink" title="Link directly to this section">How do I use the custom contact lookup application? <span>#</span></a>
        </dt>
        <dd>
          The custom contact application allows you to load customized contact information from any third-party system. The application settings window accepts two...
          <div class="read-more"><a href="#" class="expand">Read More</a></div>
        </dd>
      </dl>

		</div>
	<!-- End Content -->

<?php include('_footer.php'); ?>
