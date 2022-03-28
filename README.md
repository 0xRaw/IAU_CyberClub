# IAU_CyberClub

## Challenges:

- Secret Agent (Easy):

<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Sometime Agents Have to be so S3CR3T to protect their assets ,<br>Extract The flag :)🚩 <br> Cyber Security Club (@csc_iau) <a href="https://twitter.com/csc_iau/status/1508043937478553605?ref_src=twsrc%5Etfw">TweetLink</a> March 27, 2022</blackquote>
  
  ![image](https://user-images.githubusercontent.com/76697978/160460004-444cfa2a-5905-449e-9cb7-6cffdf3f85bd.png)
  
  
- Solution :

When you enter the website you will see this page 
![image](https://user-images.githubusercontent.com/76697978/160460704-892fb1b5-f2fa-4cb2-a5a2-930cd2021cd8.png)

As you can see it states that your user agent is wrong and you can't access the site.
Something looks weird right? there is an html comment `Sup3rS3cr3tUserAgent`, Lets try this string as user-agent.

Response :

![image](https://user-images.githubusercontent.com/76697978/160462284-b64cf6bd-74f6-4c0e-8bb3-cdd37ac9c3bc.png)

so the response from the server after adding the `Sup3rS3cr3tUserAgent` as the user agent now we got the second response which
says that the website only accept requests that are coming from this site: `s3cr3tsite.com` there is a hint to use a `Referer Header` 

so after adding the referer with this value : s3cr3tsite.com , we will get the flag

![image](https://user-images.githubusercontent.com/76697978/160463804-316e62fc-2b77-4b92-930b-2675aef4a93e.png)
