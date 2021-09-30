<?php 
include 'includes/header.php' ;
if (!$_SESSION['view_lessons']) {
  header("Location:index.php");exit;
}
?>


 <main class="container-fluid home-container">
   <section class="row">
    <div class="section-image col-md-2">
    </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-9 course-text p-4 shadow">
            <div class="heading mb-3">Social Engineering Course Assessments</div>
            <em>Answer all questions. Questions marked with asterisks has higher points</em>

            <form method="post" action="score_assessment.php">
            <div class="assessments">
                <ol>
                    <li class="question">
                       <div class="question-body">
                         Which of the following explains social engineering
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question1"  value="1" required> Social Engineering involves the user of browser</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question1" value="2"> Social Engineering connect people together</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question1" value="3"> Social Engineering is about influencing or controlling people to reveal sensitive information</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question1" value="4"> Social Engineering is a collection of social media platforms</label>
                           </li>
                         </ul>
                       </div>
                    </li>

                    <li class="question">
                       <div class="question-body">
                        Select the option that is true about Social Engineering
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question2" value="1" required>Social Engineering involves knowing about computer science algorithms</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question2" value="2">Social Engineering is good for children</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question2" value="3"> Social Engineering does not affect organisations</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question2" value="4"> Social Engineering prey on common emotional human factors such as greed , courtesy, thoughtlessness etc</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        Which of the following industries has been affected by Social Engineering attacks?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question3" value="1" required>Social services organisation</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question3" value="2">health insurance organization</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question3" value="3"> Financial Insitutions</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question3" value="4"> All of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        The following are types of Social Engineering attacks except
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question4" value="1" required>Multi-factor authentication</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question4" value="2">Human-based attacks</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question4" value="3"> Phishing</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question4" value="4"> Technology-based attacks</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        Which of the following is the first step a social engineering attacker takes?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question5" value="1" required>Computer acquisition</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question5" value="2">Information gathering</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question5" value="3">Gathering softwares</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question5" value="4"> All of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        Which of the following explains pretexting?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question6" value="1" required>Pretexting is a technology-based attack</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question6" value="2">Pretexting is a way of building trust with a victim by an attacker</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question6" value="3">Pretexting is not accepted as a social engineering method</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question6" value="4"> All of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        Which of the following statement is not correct?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question7" value="1" required>Phishing is a technology based social engineering method</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question7" value="2">Human based social engineering require a person-to-person interaction</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question7" value="3">It is impossible to mitigate social engineering attack</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question7" value="4"> None of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        Which of the following is not a Social Engineering methods?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question8" value="1" required>Phishing </label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question8" value="2">Spear Phishing</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question8" value="3">SQL Injection</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question8" value="4">Pop up Window</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                        Social Engineering attacker can make user of social for information gathering; true or false?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question9" value="1" required>true </label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question9" value="2">false</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       When you received an email what are the things you should do to prevent being a victim of social engineering attack *
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question10" value="1" required>Call the police</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question10" value="2">Check and verify all the information on the email before any other action</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question10" value="3">Read and respond to the email, then verify the identity of the sender</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question10" value="4">Report every email to the appropriate authority</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       What will you do if you discover a mismatch on the information of a message/email you received? *
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question11" value="1" required>Open and respond to the email then report to the appropriate authority</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question11" value="2">Report to the appropriate authority within the organisation, mark the message as dangerous or spam and perform no other action on the message</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question11" value="3">Use technological tools to analyze the email</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question11" value="4">None of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       You received an email from a colleague within you company requesting for a sensitive information, you have check and verify the information on this email, what is the next thing you will do? *
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question11" value="1" required>I will send the information to my colleague since I have verified the information on the message</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question11" value="2">I will report any message requesting for sensitive information even if it is from a colleague that needs it</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question11" value="3">I will reach the colleague through phone call to confirm the request I have received before performing any action on the email.</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question11" value="4">All of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       Should you enable multi-factor authentication on your account settings? *
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question12" value="1" required>Enable for one week and disable for one week</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question12" value="2">Yes, I will enable multi-factor authentication on my account always</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question12" value="3">No, I hate the extra process</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question12" value="4">I will flip a coin to decide</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       What will you do if you receive an email requesting you to click a link to win an ipad? 
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question13" value="1" required>I will delete the email</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question13" value="2">I will report to the appropriate authority</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question13" value="3">All of the above</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question13" value="4">None of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       If you are working in an office with other people and you had to step out to get a cup of coffee, which of the following will you do? *
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question14" value="1" required>I will tell my colleague to watch over my computer</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question14" value="2">I will make sure my computer is lock before leaving my desk</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question14" value="3">I will just rush out to quickly get the coffee and try to get back as quickly as I can</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question14" value="4">None of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                    <li class="question">
                       <div class="question-body">
                       Which of the following is a precaution to take while performing your duty as an employee?
                       </div>
                       <div class="question-option">
                         <ul>
                           <li>
                             <label> <input type="radio" name="question15" value="1" required>Check and verify sender details including domain address from where a message is coming before opening an email </label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question15" value="2">Do no open email attachment unless the sender has been fully verified</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question15" value="3">All of the Above</label>
                           </li>
                           <li>
                             <label> <input type="radio" name="question15" value="4">None of the above</label>
                           </li>
                         </ul>
                       </div>
                    </li>
                </ol>
                <div class="d-flex justify-content-end mt-5 mb-3">
                  <button type="submit" class="btn btn-primary">Submit Questions</button>
                  
                </div>
            </div>
            </form>
          </div>
          <div class="col-md-2"></div>
        </div>
        
      </div>
      <div class="col-md-2"></div>
   </section>
   
 </main>
 <?php include 'includes/footer.php' ?>