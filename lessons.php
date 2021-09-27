
<?php 
@session_start();
if (!(isset($_SESSION['firstname']) && $_SESSION['firstname'])) {
  header("Location:registration.php");exit;
}
include 'includes/header.php' 

?>

 <main class="container-fluid home-container">
   <section class="row">
    <div class="section-image col-md-3">
      <img src="assets/images/lesson/lesson1.jpeg" alt="lesson image">
      <span class="image-credit"><em>https://www.efilecabinet.com</em></span>
    </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-9 course-text p-4 shadow">
            <div class="text-end mr-3 mb-2 stage-indicator"><span id="stage-indicator-current"></span> / <span id="stage-indicator-len"></span></div>
            <div data-lesson='1' class="course-item active" data-image=''>
              <div class="heading mb-3">Social Engineering</div>
              <h3 class="mb-4 mt-4">What is Social Engineering?</h3>
              <section class="body">
                  <p>
                    Social engineering attack is the act of influencing or controlling a person or a group of individuals to cause or persuade them to execute specific actions or to leak important information that is of importance to a cyber-attacker
                  </p>

                  <p>
                    Social engineering in itself doesn't essentially need an oversized quantity of technical information to achieve success. Instead, social engineering preys on common aspects of human scientific discipline like curiosity, courtesy, naivety, greed, thoughtlessness, timidity, and apathy. Social engineering methods are normally utilized by some fraudulent individuals known as cyber attackers or cyber criminals to deliver malicious code (malware2) in order to deceive their victims.
                  </p>

                  <p>
                    Numerous styles of social engineering attack strategies are used by the cyber criminals; however, these attacks are carried out largely by exploiting online communication tools like email (phishing), vishing (phone call), and smishing (SMS). These techniques will be discussed in the next section
                  </p>
                
              </section>
              <h3 class="mb-4 mt-4">The Impact of Social Engineering Attacks</h3>
              <section>
                <p>
                  It is no news that many arrests involving social engineering attacks and cybercrimes have been on the increase in recent years in many countries. These crimes were connected with cyber criminals hacking into big organisations including banks, health insurance companies, pension and social services organisations
                </p>

              </section>
            </div>

            <div data-lesson='2' class="course-item" data-image='' data-image-credit=''>
              <div class="heading mb-3">Phases in Social Engineering Attack</div>

              <section class="body">
                  <p>
                    A critical phase in cyber-attack is information gathering. In this phase, information is amassed from a myriad of sources; information that aids the attacker to launch attack. A targeted attack is not well recognized by the victims and, therefore, affords the attacker the opportunity of leaving little or no traces of being caught or suspected by anyone. The type and stages of social engineering attacks are given below
                  </p>
                
              </section>
              <h3 class="mb-4 mt-4">Information Gathering Activities at Reconnaissance Phase</h3>
              <section>
                <p>
                  In this activity, hackers uses google search tools,FOCA, social media  and other applications to look for security loopholes in the computer codes used by sites and discover information about their victim. The search engine is aggressive in creating indices which sometimes result in the revelation of information being accessed by attackers in which the individual or organization that has been targeted may not know
                </p>


              </section>
              <h3 class="mb-4 mt-4">Development of Relationship (rapport) </h3>
              <section>
                <p>
                  The next stage for the attacker is to form a relationship with the victim or his target to gain trust. Attackers build relationship with the victim for the purpose of winning confidence to his side (Verizon, 2012 & Mann, 2008). So, the victim gets relaxed and comfortable with the attacker whose primary objective is to defraud him without any trace of suspicion. The cyber-criminal spends much time to study his victim.
                </p>

                <h3>Pretexting</h3>
                <section>
                  <p>
                    Pretexting involves creating a scenario to persuade a targeted victim to release information or perform some action. For the attacker to start building a relationship with his target, he approaches the victim under the disguise of giving him assistance in one way or the way. The social engineer attacker acts like a “good samaritan”. Then he makes the victim to feel very relaxed and win his confidence and trust before he finally launches his attack. 
                  </p>
                </section>

            </div>
            <div data-lesson='3' class="course-item" data-image='' data-image-credit=''>
              <div class="heading mb-3">Types of Social Engineering Attack</div>

              <section class="body">
                <h3 class="mb-4 mt-4">Human 
                Based Attacks</h3>
                  <p>
                    The human-based social engineering requires a person-to-person interaction to achieve an objective. This may mean impersonation, third-party authorization, dumpster diving, and shoulder surfing (Peltier, 2006).
                    For example, Dumpster diving as an activity which involves searching important information in dumpsters and recycle centers (for the target organization) (Long and Mitnick, 2008). Dumpster diving produces information like phone records, organizational charts, manuals and printouts of usernames and passwords (Laribee, 2006).
                  </p>
                
              </section>
              <h3 class="mb-4 mt-4">
              Technology Based Attacks</h3>
              <section>
                <p>
                  Technology-based social engineering requires an electronic interface to achieve the desired objective. This may involve using email, email attachment, and web sites. Examples of technology based attacks are phising, spear phising and pop-up window.
                </p>
              </section>
              <section>
                  <h3 class="mb-4 mt-4">Phishing Attacks</h3>
                  <p>
                    Phishing refers to “the activity of getting information from the victim by sending email or web through impersonation” (Workman, 2008)
                  </p>
                  <p>
                    The attacker composes an email that states that the target will be qualified to win. For example, an iPad can be given out to those who fill out a survey of questionnaire. The questionnaire will then request for very sensitive information of respondents
                  </p>
                  <p>
                    The victim gets the email, fills out the questions which require him to reply the reply the attacker by filling out a questionnaire. This will give the attacker an unlimited access to victim’s personal details. Then the victim’s bank account would be emptied within a few minutes.
                  </p>
              </section>
              <h3 class="mb-4 mt-4">Spear Phishing</h3>
              <section>
                <p>
                  Laribee (2006) sees spear phishing as “the act of carrying out a phishing attack from the attacker’s previous knowledge of victim’s information”. By implication, attackers can still use the information of a former victim to get to other victims who are likely to be relatives or friends with the intent of deception.
                </p>

                <h3>Pop up window</h3>
                <section>
                  <p>
                    Maan and Sharma (2012) view pop-up windows as forms of attack whereby the attacker injects traffic into the victims HTTP connection with the aim of presenting a window that looks legitimate, but serves the purposes of the attacker. The window sends out a form to unsuspecting persons to fill out in order to have access to certain things that will benefit the victims still with the aim of obtaining sensitive information that will aid their objective
                  </p>
                </section>

            </div>

            <div data-lesson='4' class="course-item" data-image='' data-image-credit=''>
              <div class="heading mb-3">How to Mitigate Social Engineering Attack</div>

              <section class="body">
                <h3 class="mb-4 mt-4">Multi-factor Authentication</h3>
                  <p>
                    multifactor authentication is a common and one of the effective ways for business organisations to confirm that the person accessing the systems should actually have that access. For instance, users could be sent an authentication link in order to confirm their identity whenever they want to access their account. 
                  </p>

                  <h3>Training and Awareness</h3>

                  <p>
                    There is need for employees to be trained through enlightenment programs so they will not fall prey to cyber criminals and make them see the importance of reporting promptly, scam emails that may be going around the organization and be sensitized on how to recognize spam like emails.
                  </p>

                  <p>
                    For example employees are not look closely the email address from which the email is coming from and to verify that it is a reliable email before opening or clicking any link in such emails or from any other messaging platforms.
                  </p>
                  <p>
                    As an employee, you must take social engineering security training seriously because your action can impact the organization greatly!
                  </p>
                
              </section>
              <h3 class="mb-4 mt-4">Things to keep in mind</h3>
              <section>
                <p>
                  <ol>
                    <li>Make sure you verify the identity of the sender of emails, SMS and phone calls, if something is off or looks suspecious report to the appropriate authority</li>

                    <li>Do not open or access attachment from emails from which you have not recieved prior communication</li>
                    <li>Enable Multi-factor to increase the security of your accounts</li>
                    <li>Do not leave your computer unlock when leaving your desk</li>
                    <li>Report any supspicious messages to the appropriate security</li>
                    
                  </ol>
                </p>
              </section>

            </div>
            
            <div class="d-flex justify-content-around mt-5">
              <button class="btn btn-warning" id="previous-btn" disabled>Previous</button>
              <button class="btn btn-primary" id="next-btn">Next</button>
            </div>
            
          </div>
          <div class="col-md-2"></div>
        </div>
        
      </div>
   </section>
   
 </main>
 <?php include 'includes/footer.php' ?>