<!-- (CONNECTION TO DATABASE) -->
<?php

require '../partials/_connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Iforum</title>
</head>

<body>
    <!-- (NAVBAR) -->
    <?php
        $page = 'about';
        require '../partials/_navbar.php';
    ?>
    <div class="container my-3">
            <div class="jumbotron">
                <h1 class="display-4">RULES..!</h1>
                <p class="lead">You have to follow the the below rules and condition.If you do against the rules , then you must get ban from this page..!</p>
                <hr class="my-4">
                <p>
<b>1. No Spam / Advertising / Self-promote in the forums</b><br>
These forums define spam as unsolicited advertisement for goods, services and/or other web sites, or posts with little, or completely unrelated content. Do not spam the forums with links to your site or product, or try to self-promote your website, business or forums etc.
Spamming also includes sending private messages to a large number of different users.<hr>

<b>DO NOT ASK for email addresses or phone numbers</b><br>

Your account will be banned permanently and your posts will be deleted.<hr>

<b>2. Do not post copyright-infringing material</b><br>
Providing or asking for information on how to illegally obtain copyrighted materials is forbidden.<hr>

<b>3. Do not post “offensive” posts, links or images</b>
Any material which constitutes defamation, harassment, or abuse is strictly prohibited. Material that is sexually or otherwise obscene, racist, or otherwise overly discriminatory is not permitted on these forums. This includes user pictures. Use common sense while posting.<br>
This is a web site for accountancy professionals.<hr>

<b>4. Do not cross post questions</b>
Please refrain from posting the same question in several forums. There is normally one forum which is most suitable in which to post your question.<hr>

<b>5. Do not PM users asking for help</b>
Do not send private messages to any users asking for help. If you need help, make a new thread in the appropriate forum then the whole community can help and benefit.<hr>

<b>6. Remain respectful of other members at all times</b>
All posts should be professional and courteous. You have every right to disagree with your fellow community members and explain your perspective.<br>

However, you are not free to attack, degrade, insult, or otherwise belittle them or the quality of this community. It does not matter what title or power you hold in these forums, you are expected to obey this rule.<hr>

<b>General Posting Guidelines</b>
We figured this was necessary because a lot of people come in and post threads without thinking, and without realizing that there is no possible way they could get help because of the way they posted the question. Here are some general guidelines.<hr>

<b>1. Please use SEARCH first!search_box</b>
There is a pretty good chance that unless you have some really odd or unique problem that it has been addressed on our forum before, please use the forum’s search feature first to see if there are already some good threads on the subject. It’s easy to search – just click the “Search” button at the top right of the page.<hr>

 

<b>2. Be DESCRIPTIVE and Don’t use “stupid” topic names</b>
PLEASE post a descriptive topic name! Give a short summary of your problem IN THE SUBJECT.  (Don’t use attention getting subjects, they don’t get attention and only annoy people).<hr>

Here’s a great list of topic subjects YOU SHOULD NOT POST :<br>

Help me,  Hello,  Very urgent, I have a question<br>

Generally ANYTHING similar to those is unacceptable. Just post your problem.<br>

Here is a good example of a way to post a question<br>

“how to calculate the sensitivity of net annual operating cash flows”<br>
or
“where is the ACCA exam centre in Glasgow”<br>

Remember when people help you, they are doing YOU a favor<br>

Be patient, help people out by posting good descriptions of what you need help with, and not snapping at people with garbage such as<br>
“if you aren’t going to help don’t waste my time replying”.<br>

General Forum Questions<br>
Am I allowed more than one account?<br>

No, there is no reason why you should have more than one account at OpenTuition forums. If you are banned from the forums, please do not create a new account. If you continue to create new accounts after you have been banned, your IP address will be blocked from the forums.<br>

What happens if I break a rule?<br>

If you break a rule, then you will either be warned or banned. A ban of your user account may either be temporary or permanent.<br>

The administrators and moderators also have the right to edit, delete, move or close any thread or post as they see necessary, without prior warning.<br>

What happens if I see a thread/post which has broken a rule?<br>

Please report the thread/post to the moderators or admin.<br>

Where can I find out who is in charge?<br>

The Forum Moderators are displayed in every Forum.<br>

<b>Becoming a moderator</b><br>
All moderator applicants must be a member for at least 90 days (3 months) and have at least 100 posts.
You must be active in the individual forums you wish to moderate and regularly create and respond to threads in those forums.
You must also maintain a working knowledge of the subject matter.

Please be aware that applying to be a moderator does not guarantee acceptance and that moderators will only be appointed when needed.<br>

Current moderators and administrators will review applications and decide if the applicant fits the desired post. Administrators have the final say and we reserve to right to refuse applicants with or without cause.<br>

Moderator Policy<br>

<b>In Order To Apply To Be A Moderator You Must be:</b>

a forum regular<br>
have been at the forum for over 3 months<br>
have a positive presence on OpenTuition Forums<br>
be proactive<br>
knowledgeable in the Forums they would like to moderate.<br>
polite and helpful towards other members and give advice whenever needed and whenever possible.<br>
visit the forum each day, actively take part in discussions as often as possible, ideally once a day, setting a good example to the other members.<br>
take an active part in discussions between Moderators relating to the running of the forum.<br>
help to keep unsuitable content out of the forums as much as possible.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="forum.php" role="button">HOME</a>
                </p>
        </div>
    </div>

    <!-- (FOOTER) -->
    <?php

        require '../partials/_footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>