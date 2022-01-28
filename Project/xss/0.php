
<html>
   <body>
<h2>Learning Objectives</h2>

<h3>What is an XSS vulnerability?</h3>

Cross-Site Scripting, better known as XSS in the cybersecurity community, is classified as an injection attack where malicious JavaScript gets injected into a web application with the intention of being executed by other users.

If you can get JavaScript to run on a victim's computer, there are numerous things you can achieve. This can range from stealing the victim's cookies to take over their session, running a keylogger that will log every key the user presses on their keyboard while visiting the website, redirecting the user to a totally different website altogether or performing some kind of action on the website such as placing an order, or resetting their password etc.


What types of XSS vulnerabilities are there?

XSS vulnerabilities fall into four different types; DOM, Reflected, Stored and Blind. Each type is quite a complex subject which we'll try and cover briefly here, but to gain a more in-depth understanding, you might want to try this room after completing the challenge https://tryhackme.com/room/xssgi

<h3>DOM:</h3>

DOM stands for Document Object Model and is a programming interface for HTML and XML documents. It represents the page so that programs can change the document structure, style and content. A web page is a document, and this document can be either displayed in the browser window or as the HTML source.

DOM Based XSS is where the JavaScript execution happens directly in the browser without any new pages being loaded or data submitted to backend code. Execution occurs when the website JavaScript code acts on input or user interaction. An example of this could be a website's JavaScript code getting the contents from the window.location.hash parameter and then write that onto the page in the currently being viewed section. The contents of the hash aren't checked for malicious code, allowing an attacker to inject JavaScript of their choosing onto the webpage.

<h3>Reflected:</h3>

Reflected XSS happens when user-supplied data in an HTTP request is included in the webpage source without any validation. An example of this could be an error message which is in a query string of an URL that is reflected onto the webpage. The URL could look something like the following:

https://website.thm/login?error=Username%20Is%20Incorrect

The error message could be replaced with JavaScript code which gets executed when a user visits the page.

<h3>Stored:</h3>

As the name infers, the XSS payload is stored on the web application (in a database, for example) and then gets run when other users visit the site or web page. This type of XSS can be particularly damaging due to the number of victims that may be affected. An example of this could be a blog that allows visitors to leave comments. If a visitor's message is not properly validated and checked for XSS payloads, then every subsequent visit to the blog page would run the malicious JavaScript code.

<h3>Blind:</h3>

Blind XSS is similar to a stored XSS in that your payload gets stored on the website for another user to view, but in this instance, you can't see the payload working or be able to test it against yourself first. An example of this could be a contact form. In the contact form, your message could contain an XSS payload, which when a member of staff views the message it gets executed.
   </body>
</html>


 
<!-- <hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr> -->


