<?
if ($short_actual_link) {
	$short_actual_link_orig=$short_actual_link;
	$short_actual_link=rawurlencode($short_actual_link);
	$ogtitle=rawurlencode($ogtitle);
	$ogdescription=rawurlencode($ogdescription);

	if ($search_keywordsX) {
		$social_hashtags=$search_keywordsX;
	}
	$social_hashtags=rawurlencode($social_hashtags);
	if ($ogtitle) {
		$email="
		<li class=\"rrssb-email\">
			<!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
			<a href=\"mailto:?Subject=$ogtitle\">
			<span class=\"rrssb-icon\">
			<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M21.386 2.614H2.614A2.345 2.345 0 0 0 .279 4.961l-.01 14.078a2.353 2.353 0 0 0 2.346 2.347h18.771a2.354 2.354 0 0 0 2.347-2.347V4.961a2.356 2.356 0 0 0-2.347-2.347zm0 4.694L12 13.174 2.614 7.308V4.961L12 10.827l9.386-5.866v2.347z\"/></svg>
			</span>
			<span class=\"rrssb-text\">email</span>
			</a>
		</li>
		";
		$twitter="
		<li class=\"rrssb-twitter\">
			<!-- Replace href with your Meta and URL information  -->
			<a href=\"https://twitter.com/intent/tweet?text=$ogtitle&amp;url=$short_actual_link&amp;hashtags=$social_hashtags\" class=\"popup\">
			<span class=\"rrssb-icon\">
			<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z\"/></svg>
			</span>
			<span class=\"rrssb-text\">twitter</span>
			</a>
		</li>
		";
		$twitter2="
		<li class=\"rrssb-twitter\">
			<!-- Replace href with your Meta and URL information  -->
			<a href=\"https://twitter.com/intent/tweet?text=$ogtitle&amp;url=$short_actual_link&amp;hashtags=$social_hashtags\" class=\"popup\">
			<span class=\"rrssb-icon\">
			<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z\"/></svg>
			</span>
			<span class=\"rrssb-text\">share</span>
			</a>
		</li>
		";
	} else {
		$email='';
		$twitter="
		<li class=\"rrssb-twitter\">
			<!-- Replace href with your Meta and URL information  -->
			<a href=\"https://twitter.com/intent/tweet?text=$short_actual_link\" class=\"popup\">
			<span class=\"rrssb-icon\">
			<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z\"/></svg>
			</span>
			<span class=\"rrssb-text\">twitter</span>
			</a>
		</li>
		";
		$twitter2="
		<li class=\"rrssb-twitter\">
			<!-- Replace href with your Meta and URL information  -->
			<a href=\"https://twitter.com/intent/tweet?text=$short_actual_link\" class=\"popup\">
			<span class=\"rrssb-icon\">
			<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z\"/></svg>
			</span>
			<span class=\"rrssb-text\">share</span>
			</a>
		</li>
		";
	}
	$facebook="
	<li class=\"rrssb-facebook\">
		<!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
		https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
		<a href=\"https://www.facebook.com/sharer/sharer.php?u=$short_actual_link\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 29 29\"><path d=\"M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z\"/></svg>
		</span>
		<span class=\"rrssb-text\">facebook</span>
		</a>
	</li>
	";
	$facebook2="
	<li class=\"rrssb-facebook\">
		<!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
		https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
		<a href=\"https://www.facebook.com/sharer/sharer.php?u=$short_actual_link\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 29 29\"><path d=\"M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z\"/></svg>
		</span>
		<span class=\"rrssb-text\">share</span>
		</a>
	</li>
	";

	$instagram="
	<li class=\"rrssb-instagram\">
		<!-- Replace href with your URL  -->
		<a href=\"http://instagram.com/dbox\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"864\" height=\"864\" viewBox=\"0 0 864 864\"><path d=\"M860.079 254.436c-2.091-45.841-9.371-77.147-20.019-104.542-11.007-28.32-25.731-52.338-49.673-76.28-23.943-23.943-47.962-38.669-76.282-49.675C686.711 13.292 655.404 6.013 609.564 3.92 563.628 1.824 548.964 1.329 432 1.329s-131.63.495-177.564 2.591c-45.841 2.093-77.147 9.372-104.542 20.019-28.319 11.006-52.338 25.731-76.28 49.675-23.943 23.942-38.669 47.96-49.675 76.28C13.292 177.288 6.013 208.595 3.92 254.436 1.824 300.37 1.329 315.036 1.329 432s.495 131.628 2.591 177.564c2.093 45.84 9.372 77.146 20.019 104.541 11.006 28.319 25.731 52.339 49.675 76.282 23.942 23.941 47.961 38.666 76.28 49.673 27.395 10.647 58.701 17.927 104.542 20.019 45.935 2.096 60.601 2.592 177.564 2.592s131.628-.496 177.564-2.592c45.84-2.092 77.146-9.371 104.541-20.019 28.32-11.007 52.339-25.731 76.282-49.673 23.941-23.943 38.666-47.962 49.673-76.282 10.647-27.395 17.928-58.701 20.019-104.541 2.096-45.937 2.592-60.601 2.592-177.564s-.496-131.63-2.592-177.564zm-77.518 351.591c-1.915 41.99-8.932 64.793-14.828 79.969-7.812 20.102-17.146 34.449-32.216 49.521-15.071 15.07-29.419 24.403-49.521 32.216-15.176 5.896-37.979 12.913-79.969 14.828-45.406 2.072-59.024 2.511-174.027 2.511s-128.622-.438-174.028-2.511c-41.988-1.915-64.794-8.932-79.97-14.828-20.102-7.812-34.448-17.146-49.518-32.216-15.071-15.071-24.405-29.419-32.218-49.521-5.897-15.176-12.912-37.979-14.829-79.968-2.071-45.413-2.51-59.034-2.51-174.028s.438-128.615 2.51-174.028c1.917-41.988 8.932-64.794 14.829-79.97 7.812-20.102 17.146-34.448 32.216-49.518 15.071-15.071 29.418-24.405 49.52-32.218 15.176-5.897 37.981-12.912 79.97-14.829 45.413-2.071 59.034-2.51 174.028-2.51s128.615.438 174.027 2.51c41.99 1.917 64.793 8.932 79.969 14.829 20.102 7.812 34.449 17.146 49.521 32.216 15.07 15.071 24.403 29.418 32.216 49.52 5.896 15.176 12.913 37.981 14.828 79.97 2.071 45.413 2.511 59.034 2.511 174.028s-.44 128.615-2.511 174.027z\"/><path d=\"M432 210.844c-122.142 0-221.156 99.015-221.156 221.156S309.859 653.153 432 653.153 653.153 554.14 653.153 432c0-122.142-99.012-221.156-221.153-221.156zm0 364.713c-79.285 0-143.558-64.273-143.558-143.557 0-79.285 64.272-143.558 143.558-143.558 79.283 0 143.557 64.272 143.557 143.558 0 79.283-64.274 143.557-143.557 143.557z\"/><circle cx=\"661.893\" cy=\"202.107\" r=\"51.68\"/></svg>
		</span>
		<span class=\"rrssb-text\">instagram</span>
		</a>
	</li>
	";

	$linkedin="
	<li class=\"rrssb-linkedin\">
		<!-- Replace href with your meta and URL information -->
		<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=$short_actual_link\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M25.424 15.887v8.447h-4.896v-7.882c0-1.98-.71-3.33-2.48-3.33-1.354 0-2.158.91-2.514 1.802-.13.315-.162.753-.162 1.194v8.216h-4.9s.067-13.35 0-14.73h4.9v2.087c-.01.017-.023.033-.033.05h.032v-.05c.65-1.002 1.812-2.435 4.414-2.435 3.222 0 5.638 2.106 5.638 6.632zM5.348 2.5c-1.676 0-2.772 1.093-2.772 2.54 0 1.42 1.066 2.538 2.717 2.546h.032c1.71 0 2.77-1.132 2.77-2.546C8.056 3.593 7.02 2.5 5.344 2.5h.005zm-2.48 21.834h4.896V9.604H2.867v14.73z\"/></svg>
		</span>
		<span class=\"rrssb-text\">linkedin</span>
		</a>
	</li>
	";


	$reddit="
	<li class=\"rrssb-reddit\">
		<a href=\"http://www.reddit.com/submit?url=$short_actual_link&amp;title=$ogtitle&amp;text=$ogdescription\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M11.794 15.316c0-1.03-.835-1.895-1.866-1.895-1.03 0-1.893.866-1.893 1.896s.863 1.9 1.9 1.9c1.023-.016 1.865-.916 1.865-1.9zM18.1 13.422c-1.03 0-1.895.864-1.895 1.895 0 1 .9 1.9 1.9 1.865 1.03 0 1.87-.836 1.87-1.865-.006-1.017-.875-1.917-1.875-1.895zM17.527 19.79c-.678.68-1.826 1.007-3.514 1.007h-.03c-1.686 0-2.834-.328-3.51-1.005a.677.677 0 0 0-.958 0c-.264.265-.264.7 0 1 .943.9 2.4 1.4 4.5 1.402.005 0 0 0 0 0 .005 0 0 0 0 0 2.066 0 3.527-.46 4.47-1.402a.678.678 0 0 0 .002-.958c-.267-.334-.688-.334-.988-.043z\"/><path d=\"M27.707 13.267a3.24 3.24 0 0 0-3.236-3.237c-.792 0-1.517.287-2.08.76-2.04-1.294-4.647-2.068-7.44-2.218l1.484-4.69 4.062.955c.07 1.4 1.3 2.6 2.7 2.555a2.696 2.696 0 0 0 2.695-2.695C25.88 3.2 24.7 2 23.2 2c-1.06 0-1.98.616-2.42 1.508l-4.633-1.09a.683.683 0 0 0-.803.454l-1.793 5.7C10.55 8.6 7.7 9.4 5.6 10.75c-.594-.45-1.3-.75-2.1-.72-1.785 0-3.237 1.45-3.237 3.2 0 1.1.6 2.1 1.4 2.69-.04.27-.06.55-.06.83 0 2.3 1.3 4.4 3.7 5.9 2.298 1.5 5.3 2.3 8.6 2.325 3.227 0 6.27-.825 8.57-2.325 2.387-1.56 3.7-3.66 3.7-5.917 0-.26-.016-.514-.05-.768.965-.465 1.577-1.565 1.577-2.698zm-4.52-9.912c.74 0 1.3.6 1.3 1.3a1.34 1.34 0 0 1-2.683 0c.04-.655.596-1.255 1.396-1.3zM1.646 13.3c0-1.038.845-1.882 1.883-1.882.31 0 .6.1.9.21-1.05.867-1.813 1.86-2.26 2.9-.338-.328-.57-.728-.57-1.26zm20.126 8.27c-2.082 1.357-4.863 2.105-7.83 2.105-2.968 0-5.748-.748-7.83-2.105-1.99-1.3-3.087-3-3.087-4.782 0-1.784 1.097-3.484 3.088-4.784 2.08-1.358 4.86-2.106 7.828-2.106 2.967 0 5.7.7 7.8 2.106 1.99 1.3 3.1 3 3.1 4.784C24.86 18.6 23.8 20.3 21.8 21.57zm4.014-6.97c-.432-1.084-1.19-2.095-2.244-2.977.273-.156.59-.245.928-.245 1.036 0 1.9.8 1.9 1.9a2.073 2.073 0 0 1-.57 1.327z\"/></svg>
		</span>
		<span class=\"rrssb-text\">reddit</span>
		</a>
	</li>
	";

	$googleplus="
	<li class=\"rrssb-googleplus\">
		<!-- Replace href with your meta and URL information.  -->
		<a href=\"https://plus.google.com/share?url=$short_actual_link\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z\"/></svg>            </span>
		<span class=\"rrssb-text\">google+</span>
		</a>
	</li>
	";

	$pinterest="
	<li class=\"rrssb-pinterest\">
		<!-- Replace href with your meta and URL information.  -->
		<a href=\"http://pinterest.com/pin/create/button/?url=$short_actual_link&amp;media=\" class=\"popup\">
		<span class=\"rrssb-icon\">
		<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 28\"><path d=\"M14.02 1.57c-7.06 0-12.784 5.723-12.784 12.785S6.96 27.14 14.02 27.14c7.062 0 12.786-5.725 12.786-12.785 0-7.06-5.724-12.785-12.785-12.785zm1.24 17.085c-1.16-.09-1.648-.666-2.558-1.22-.5 2.627-1.113 5.146-2.925 6.46-.56-3.972.822-6.952 1.462-10.117-1.094-1.84.13-5.545 2.437-4.632 2.837 1.123-2.458 6.842 1.1 7.557 3.71.744 5.226-6.44 2.924-8.775-3.324-3.374-9.677-.077-8.896 4.754.19 1.178 1.408 1.538.49 3.168-2.13-.472-2.764-2.15-2.683-4.388.132-3.662 3.292-6.227 6.46-6.582 4.008-.448 7.772 1.474 8.29 5.24.58 4.254-1.815 8.864-6.1 8.532v.003z\"/></svg>
		</span>
		<span class=\"rrssb-text\">pinterest</span>
		</a>
	</li>
	";
	$
	$soc_square= "
		<div style='width:270px;margin-bottom:5px;'>
			<ul class=\"rrssb-buttons\">
				$facebook
			</ul>
			<!-- Buttons end here -->
		</div>
		<div style='width:270px;'>
			<ul class=\"rrssb-buttons\">
				$twitter$email
			</ul>
			<!-- Buttons end here -->
		</div>
	";
	$soc_small= "
		<div style='width:270px;'>
			<ul class=\"rrssb-buttons\">
				$facebook2$twitter2
			</ul>
			<!-- Buttons end here -->
		</div>
	";
	

	$social_lineS= "
		<div style='width:300px;'>
			<ul class=\"rrssb-buttons\">
				$facebook$twitter$googleplus$linkedin
			</ul>
			<!-- Buttons end here -->
		</div>
	";
	$social_lineL= "
		<div style='max-width:600px;margin-bottom:25px;'>
			<ul class=\"rrssb-buttons\">
				$facebook$twitter$googleplus$linkedin$pinterest$reddit$email
			</ul>
			<!-- Buttons end here -->
		</div>
	";
	$social_lineL2= "
		<div style='max-width:600px;margin:10px;'>
			<ul class=\"rrssb-buttons\">
				$facebook$twitter$googleplus$linkedin$pinterest$reddit$email
			</ul>
			<!-- Buttons end here -->
		</div>
	";
}
$short_actual_link=$short_actual_link_orig;
//$social_lineL.="$short_actual_link";

?>