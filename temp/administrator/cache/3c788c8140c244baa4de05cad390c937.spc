a:3:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:56:"
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:8:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:22:"Security Announcements";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:49:"https://developer.joomla.org/security-centre.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:13:"lastBuildDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 26 Feb 2017 11:20:39 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:40:"Joomla! - Open Source Content Management";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-gb";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:14:"managingEditor";a:1:{i:0;a:5:{s:4:"data";s:47:"admin@joomla.org (Joomla! Developer Network™)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:10:{i:0;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"[20161205] - PHPMailer Security Advisory";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:106:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/UNAIFBclIrU/668-20161205-phpmailer-security-advisory.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:90:"https://developer.joomla.org/security-centre/668-20161205-phpmailer-security-advisory.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3689:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>Severity:</strong> <span class="label label-important">High</span></li>
<li><strong>Versions:</strong> 1.5.0 through 3.6.5</li>
<li><strong>Exploit type:</strong> Remote Code Execution in third-party PHPMailer library</li>
<li><strong>CVE Numbers:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-10033">CVE-2016-10033</a> and <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-10045">CVE-2016-10045</a></li>
</ul>
<div class="alert alert-info"><strong>Note:</strong> This advisory was revised to reflect the addition of CVE-2016-10045 and the PHPMailer 5.2.20 release</div>
<h3>Description</h3>
<p>All versions of the third-party PHPMailer library distributed with Joomla! versions up to 3.6.5 are vulnerable to a remote code execution vulnerability. This is patched in PHPMailer 5.2.20 which will be included with Joomla! 3.7. After analysis, the JSST has determined that through correct use of the JMail class, there are additional validations in place which make executing this vulnerability impractical within the Joomla environment. As well, the vulnerability requires being able to pass user input to a message's "from" address; all places in the core Joomla API which send mail use the sender address set in the global configuration and does not allow for user input to be set elsewhere. However, extensions which bundle a separate version of PHPMailer or do not use the Joomla API to send email may be vulnerable to this issue.</p>
<p>Generally, the Joomla project does not issue advisories regarding third party libraries, however given the severity of this issue we felt it important to advise our users that we are aware of this issue and we have determined that the additional validations in our API prevent triggering this vulnerability.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 1.5.0 through 3.6.5</p>
<h3>Solution</h3>
<p>No action required for Joomla users, the updated library will be included in the next scheduled release and additional mechanisms exist in Joomla core to prevent triggering the vulnerability. Users of the PHPMailer library separate from Joomla are advised to upgrade to 5.2.20 or newer ASAP.</p>
<h3>Additional Resources</h3>
<ul>
<li><a href="https://legalhackers.com/advisories/PHPMailer-Exploit-Remote-Code-Exec-CVE-2016-10033-Vuln.html">https://legalhackers.com/advisories/PHPMailer-Exploit-Remote-Code-Exec-CVE-2016-10033-Vuln.html</a></li>
<li><a href="https://legalhackers.com/advisories/PHPMailer-Exploit-Remote-Code-Exec-CVE-2016-10045-Vuln-Patch-Bypass.html">https://legalhackers.com/advisories/PHPMailer-Exploit-Remote-Code-Exec-CVE-2016-10045-Vuln-Patch-Bypass.html</a></li>
<li><a href="https://github.com/PHPMailer/PHPMailer/blob/master/SECURITY.md">https://github.com/PHPMailer/PHPMailer/blob/master/SECURITY.md</a></li>
<li><a href="https://github.com/PHPMailer/PHPMailer/wiki/About-the-CVE-2016-10033-and-CVE-2016-10045-vulnerabilities">https://github.com/PHPMailer/PHPMailer/wiki/About-the-CVE-2016-10033-and-CVE-2016-10045-vulnerabilities</a></li>
</ul>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Dawid Golunski</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=UNAIFBclIrU:K2HRbsv6T-o:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/UNAIFBclIrU" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 27 Dec 2016 02:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:90:"https://developer.joomla.org/security-centre/668-20161205-phpmailer-security-advisory.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:37:"[20161204] - Misc. Security Hardening";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:102:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/jYB3ItEGbWQ/667-20161204-misc-security-hardening.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:86:"https://developer.joomla.org/security-centre/667-20161204-misc-security-hardening.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1952:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
</ul>
<h3>Description</h3>
<p>Joomla! 3.6.5 includes additional security hardening mechanisms prepared by the JSST, thanks in part to issue reports from Fotis Evangelou and Nicholas Dionysopoulos, which restricts a user's ability to make potentially damaging configuration changes. This includes restricting the ability to set the "New User Registration Group" and "Guest User Group" to a group with Super User permissions and restricting the ability for a lesser privileged user to make user group assignment changes to users in a Super User group.</p>
<p>Additionally, we have modified the behavior of <code>JUser::authorise()</code> to only return a boolean value. Previously, this method could return either a boolean value or null because the underlying call to <code>JAccess::check()</code> can also return a null value; neither <code>JUser::authorise()</code> or <code>JAccess::check()</code> documented this though. We have determined that based on how the API is used that <code>JUser::authorise()</code> should only return a boolean value. If a developer requires the previous behavior of a null return value (which indicates an "implicit" denied state versus "explicit" signified by boolean false), they should use <code>JAccess::check()</code> instead. The documentation for <code>JAccess::check()</code> has been updated to indicate the null return value as well.</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=jYB3ItEGbWQ:SiSRjYA2ubA:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/jYB3ItEGbWQ" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Dec 2016 23:00:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:86:"https://developer.joomla.org/security-centre/667-20161204-misc-security-hardening.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:42:"[20161203] - Core - Information Disclosure";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:106:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/EY3UcBwQtzI/666-20161203-core-information-disclosure.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:90:"https://developer.joomla.org/security-centre/666-20161203-core-information-disclosure.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1385:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-warning">Low</span></li>
<li><strong>Versions:</strong> 3.0.0 through 3.6.4</li>
<li><strong>Exploit type:</strong> Information Disclosure</li>
<li><strong>Reported Date:</strong> 2016-April-15</li>
<li><strong>Fixed Date:</strong> 2016-December-06</li>
<li><strong>CVE Number:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-9837">CVE-2016-9837</a></li>
</ul>
<h3>Description</h3>
<p>Inadequate ACL checks in the Beez3 com_content article layout override enables a user to view restricted content.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 3.0.0 through 3.6.4</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.5</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Christiaan Klatte and Brian Teeman</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=EY3UcBwQtzI:mLsKZtb8mlM:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/EY3UcBwQtzI" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Dec 2016 23:00:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:90:"https://developer.joomla.org/security-centre/666-20161203-core-information-disclosure.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:32:"[20161202] - Core - Shell Upload";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:96:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/fI7Ty93n-Rk/665-20161202-core-shell-upload.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:80:"https://developer.joomla.org/security-centre/665-20161202-core-shell-upload.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1345:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-warning">Low</span></li>
<li><strong>Versions:</strong> 3.0.0 through 3.6.4</li>
<li><strong>Exploit type:</strong> Shell Upload</li>
<li><strong>Reported Date:</strong> 2016-October-26</li>
<li><strong>Fixed Date:</strong> 2016-December-06</li>
<li><strong>CVE Number:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-9836">CVE-2016-9836</a></li>
</ul>
<h3>Description</h3>
<p>Inadequate filesystem checks allowed files with alternative PHP file extensions to be uploaded.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 3.0.0 through 3.6.4</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.5</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Xiphos Research Ltd.</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=fI7Ty93n-Rk:EzVt2cAitLc:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/fI7Ty93n-Rk" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Dec 2016 23:00:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:80:"https://developer.joomla.org/security-centre/665-20161202-core-shell-upload.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:39:"[20161201] - Core - Elevated Privileges";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:103:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/OjvlaBoXTCU/664-20161201-core-elevated-privileges.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:87:"https://developer.joomla.org/security-centre/664-20161201-core-elevated-privileges.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1461:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-important">High</span></li>
<li><strong>Versions:</strong> 1.6.0 through 3.6.4</li>
<li><strong>Exploit type:</strong> Elevated Privileges</li>
<li><strong>Reported Date:</strong> 2016-November-04</li>
<li><strong>Fixed Date:</strong> 2016-December-06</li>
<li><strong>CVE Number:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-9838">CVE-2016-9838</a></li>
</ul>
<h3>Description</h3>
<p>Incorrect use of unfiltered data stored to the session on a form validation failure allows for existing user accounts to be modified; to include resetting their username, password, and user group assignments.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 1.6.0 through 3.6.4</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.5</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> @iamsecurity</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=OjvlaBoXTCU:WcGglL5eZIA:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/OjvlaBoXTCU" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Dec 2016 23:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:87:"https://developer.joomla.org/security-centre/664-20161201-core-elevated-privileges.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:41:"[20161003] - Core - Account Modifications";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:105:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/AS4zU9sIOi4/661-20161003-core-account-modifications.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:89:"https://developer.joomla.org/security-centre/661-20161003-core-account-modifications.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1426:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-important">High</span></li>
<li><strong>Versions:</strong> 3.4.4 through 3.6.3</li>
<li><strong>Exploit type:</strong> Account Modifications</li>
<li><strong>Reported Date:</strong> 2016-October-26</li>
<li><strong>Fixed Date:</strong> 2016-October-25</li>
<li><strong>CVE Number:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-9081">CVE-2016-9081</a></li>
</ul>
<h3>Description</h3>
<p>Incorrect use of unfiltered data allows for existing user accounts to be modified; to include resetting their username, password, and user group assignments.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 3.4.4 through 3.6.3</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.4</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Joomla! Security Strike Team</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=AS4zU9sIOi4:K0bR_TRESjQ:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/AS4zU9sIOi4" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 Oct 2016 14:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:89:"https://developer.joomla.org/security-centre/661-20161003-core-account-modifications.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:39:"[20161002] - Core - Elevated Privileges";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:103:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/-RTZuR5heMk/660-20161002-core-elevated-privileges.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:87:"https://developer.joomla.org/security-centre/660-20161002-core-elevated-privileges.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1353:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-important">High</span></li>
<li><strong>Versions:</strong> 3.4.4 through 3.6.3</li>
<li><strong>Exploit type:</strong> Elevated Privileges</li>
<li><strong>Reported Date:</strong> 2016-October-21</li>
<li><strong>Fixed Date:</strong> 2016-October-25</li>
<li><strong>CVE Number:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-8869">CVE-2016-8869</a></li>
</ul>
<h3>Description</h3>
<p>Incorrect use of unfiltered data allows for users to register on a site with elevated privileges.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 3.4.4 through 3.6.3</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.4</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Davide Tampellini</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=-RTZuR5heMk:jRIC-gQSzJg:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/-RTZuR5heMk" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 25 Oct 2016 14:00:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:87:"https://developer.joomla.org/security-centre/660-20161002-core-elevated-privileges.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:36:"[20161001] - Core - Account Creation";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:100:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/jBdD3It54fQ/659-20161001-core-account-creation.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:84:"https://developer.joomla.org/security-centre/659-20161001-core-account-creation.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1340:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-important">High</span></li>
<li><strong>Versions:</strong> 3.4.4 through 3.6.3</li>
<li><strong>Exploit type:</strong> Account Creation</li>
<li><strong>Reported Date:</strong> 2016-October-18</li>
<li><strong>Fixed Date:</strong> 2016-October-25</li>
<li><strong>CVE Number:</strong> <a href="https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-8870">CVE-2016-8870</a></li>
</ul>
<h3>Description</h3>
<p>Inadequate checks allows for users to register on a site when registration has been disabled.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 3.4.4 through 3.6.3</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.4</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Demis Palma</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=jBdD3It54fQ:JviFp4umqu4:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/jBdD3It54fQ" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 25 Oct 2016 14:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:84:"https://developer.joomla.org/security-centre/659-20161001-core-account-creation.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:37:"[20160802] - Core - XSS Vulnerability";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:101:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/KnFqePYT8E4/653-20160802-core-xss-vulnerability.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:85:"https://developer.joomla.org/security-centre/653-20160802-core-xss-vulnerability.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1241:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-warning">Low</span></li>
<li><strong>Versions:</strong> 1.6.0 through 3.6.0</li>
<li><strong>Exploit type:</strong> XSS Vulnerability</li>
<li><strong>Reported Date:</strong> 2016-February-05</li>
<li><strong>Fixed Date:</strong> 2016-August-03</li>
<li><strong>CVE Number: </strong>Requested</li>
</ul>
<h3>Description</h3>
<p>Inadequate escaping leads to XSS vulnerability in mail component.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 1.6.0 through 3.6.0</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.1</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> Dingjie (Daniel) Yang</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=KnFqePYT8E4:peauut84WLo:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/KnFqePYT8E4" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 03 Aug 2016 21:20:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:85:"https://developer.joomla.org/security-centre/653-20160802-core-xss-vulnerability.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:31:"
			
			
			
			
			
			
			
		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"[20160801] - Core - ACL Violation";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:103:"http://feeds.joomla.org/~r/JoomlaSecurityNews/~3/8txi9q_MeyI/652-20160801-core-core-acl-violations.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:87:"https://developer.joomla.org/security-centre/652-20160801-core-core-acl-violations.html";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1314:"<ul>
<li><strong>Project:</strong> Joomla!</li>
<li><strong>SubProject:</strong> CMS</li>
<li><strong>Severity:</strong> <span class="label label-warning">Low</span></li>
<li><strong>Versions:</strong> 1.6.0 through 3.6.0</li>
<li><strong>Exploit type:</strong> ACL Violation</li>
<li><strong>Reported Date:</strong> 2016-April-29</li>
<li><strong>Fixed Date:</strong> 2016-August-03</li>
<li><strong>CVE Numbers:</strong> requested</li>
</ul>
<h3>Description</h3>
<p>Inadequate ACL checks in com_content provide potential read access to data which should be access restricted to users with edit_own level.</p>
<h3>Affected Installs</h3>
<p>Joomla! CMS versions 1.6.0 through 3.6.0</p>
<h3>Solution</h3>
<p>Upgrade to version 3.6.1</p>
<h3>Contact</h3>
<p>The JSST at the <a title="Contact the JSST" href="https://developer.joomla.org/security-centre.html">Joomla! Security Centre</a>.</p>
<div class="alert alert-info"><strong>Reported By:</strong> T-Systems Multimedia Solutions</div><div class="feedflare">
<a href="http://feeds.joomla.org/~ff/JoomlaSecurityNews?a=8txi9q_MeyI:YVtmpa0SBGg:yIl2AUoC8zA"><img src="http://feeds.feedburner.com/~ff/JoomlaSecurityNews?d=yIl2AUoC8zA" border="0"></img></a>
</div><img src="http://feeds.feedburner.com/~r/JoomlaSecurityNews/~4/8txi9q_MeyI" height="1" width="1" alt=""/>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:6:"author";a:1:{i:0;a:5:{s:4:"data";s:50:"security@joomla.org (Joomla! Security Strike Team)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:15:"Security Centre";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 02 Aug 2016 22:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:1:{s:8:"origLink";a:1:{i:0;a:5:{s:4:"data";s:87:"https://developer.joomla.org/security-centre/652-20160801-core-core-acl-violations.html";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:2:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";s:4:"href";s:42:"http://feeds.joomla.org/JoomlaSecurityNews";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:2:{s:3:"rel";s:3:"hub";s:4:"href";s:32:"http://pubsubhubbub.appspot.com/";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:42:"http://rssnamespace.org/feedburner/ext/1.0";a:3:{s:4:"info";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:1:{s:3:"uri";s:18:"joomlasecuritynews";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:14:"emailServiceId";a:1:{i:0;a:5:{s:4:"data";s:18:"JoomlaSecurityNews";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:18:"feedburnerHostname";a:1:{i:0;a:5:{s:4:"data";s:29:"https://feedburner.google.com";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:7:"headers";a:11:{s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"etag";s:27:"KfAlx6VUTHJ8L6lDQH7VVyUwmus";s:13:"last-modified";s:29:"Sun, 26 Feb 2017 11:20:46 GMT";s:16:"content-encoding";s:4:"gzip";s:17:"transfer-encoding";s:7:"chunked";s:4:"date";s:29:"Sun, 26 Feb 2017 11:41:26 GMT";s:7:"expires";s:29:"Sun, 26 Feb 2017 11:41:26 GMT";s:13:"cache-control";s:18:"private, max-age=0";s:22:"x-content-type-options";s:7:"nosniff";s:16:"x-xss-protection";s:13:"1; mode=block";s:6:"server";s:3:"GSE";}s:5:"build";d:20070719221955;}