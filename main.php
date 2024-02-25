<!-- Hello You are Important to Somebody Probably -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>sad little websyte</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Prevents Form Resubmission Dialogue Box -->
    <script> if (window.history.replaceState) { window.history.replaceState(null, null, window.location.href); } </script>
</head>

<style>
    a:link {
        color: rgb(5, 180, 196);
        background-color: transparent;
        text-decoration: underline;
    }

    a:visited {
        color: rgb(207, 128, 174);
        background-color: transparent;
        text-decoration: none;
    }

    a:hover {
        color: rgb(20, 184, 165);
        background-color: transparent;
        text-decoration: underline;
    }

    a:active {
        color: rgb(197, 61, 141);
        background-color: transparent;
        text-decoration: underline;
    }

    div.postoptionsfile:hover {
        filter: brightness(95%);
        transition: .25;
        cursor: pointer;
    }

    div.postoptionslink:hover {
        filter: brightness(95%);
        transition: .25;
        cursor: pointer;
    }

    div.postoptionsnew:hover {
        filter: brightness(95%);
        transition: .25;
        cursor: pointer;
    }

    div.postoptionsimage:hover {
        filter: brightness(95%);
        transition: .25;
        cursor: pointer;
    }

    div.menu-bar:hover {
        filter: brightness(85%);
        transition: .25s;
        cursor: pointer;
    }

    div.courses:hover {
        filter: brightness(85%);
        transition: .25s;
        cursor: pointer;
    }
</style>

<body>
    <!--
    <form method="post">
        <button type="submit" name="roster-append">Roster Append</button>
        <button type="submit" name="roster-fetch">Roster Fetch</button>
        <button type="submit" name="discussion-append">Discussion Append</button>
        <button type="submit" name="discussion-fetch">Discussion Fetch</button>
        <button type="submit" name="media-append">Media Append</button>
        <button type="submit" name="media-fetch">Media Fetch</button>
    </form>
    -->

    <div id="user-bar"
        style="background-color:white;filter: drop-shadow(0px 1px 5px rgb(200, 200, 200));border-bottom: 2px solid rgb(160,160,160);font-family: 'Comic Sans MS';">


        <span id="logo">
            <img src="https://lh3.googleusercontent.com/drive-viewer/AEYmBYTao2ZShD2ngM5Wt6PGQiWSCBBpnoaPASXDTO9Dt_ifVtSrujceBRlUC5ICyhCZ-GRduOsyfSc_1HDqfrE2YhNM_EvJ=s2560"
                alt="smile!" class="logo"></img>
        </span>

    </div>

    <div id="container">
        <div class="block" id="column-i">

            <div id="settings" class="sidebar">

                <i class="fa fa-gears"></i>

                <span>Settings</span>
            </div>

            <div id="post-menu" class="sidebar">

                <div id="new-post" class="postoptionsnew" onclick="newPostNull()"><i class="fa fa-plus"></i> New Post</div>

                <div id="post-options">
                    <div id="link" onclick="newPostNull()" class="postoptionslink"><i class="fa fa-link"></i>
                        <span style="margin-left:7px">Link</span>
                    </div>
                    <div id="image" onclick="newPostNull()" class="postoptionsimage"><i class="fa fa-image"></i>
                        <span style="margin-left:5px">Image</span>
                    </div>
                    <div id="file" onclick="newPostNull()" class="postoptionsfile"><i class="fa fa-file"></i>
                        <span style="margin-left:7px">File</span>
                    </div>
                </div>
            </div>

            <div id="all-courses" class="sidebar">
                <i class="fa fa-bars"></i>
                <b> All Courses</b>

            </div>

            <div id="course1" class="courses" onclick="notif1()">
                <div style="background-color:rgb(140, 216, 222);" class="courseblock">

                </div>

                <span id="course1text" class="coursetext">
                    CS 221
                </span>

                <div id="course1notify" class="coursenotify">
                    1
                </div>
            </div>
            <div id="course2" class="courses" onclick="notif2()">
                <div style="background-color:rgb(225, 183, 228);" class="courseblock">

                </div>

                <div id="course2text" class="coursetext">
                    EQ
                </div>

                <div id="course2notify" class="coursenotify">
                    9
                </div>
            </div>
            <div id="course3" class="courses" onclick="notif3()">
                <div style="background-color:rgb(231, 207, 175);" class="courseblock">

                </div>

                <span id="course3text" class="coursetext">
                    Algebra 1
                </span>

                <div id="course3notify" class="coursenotify">
                    2
                </div>
            </div>
            <div id="course4" class="courses" onclick="notif4()" style="border-bottom: 2px solid rgb(190,190,190)">
                <div style="background-color:rgb(205, 231, 172);" class="courseblock">
                </div>
                <span id="course4text" class="coursetext">
                    Theater Stuff
                </span>

                <div id="course4notify" class="coursenotify">
                    0
                </div>
            </div>

            <div id="col1img">
                <img src="https://lh3.googleusercontent.com/drive-viewer/AEYmBYRraH5nSwmXFQHvIV9Qhw3yP40rXMYb2wa3YEVB2WgckIgZ6BJsGfzwtv0U_koLA4GjAGyIh40HVV2VfKKKvjgYozXL=s1600"
                    style="width:100%;height:width;">
            </div>

        </div>

        <div class="block" id="column-ii">
            <form method="post">
                <div id="menu-bar">
                    <button id="Discussion" name="discussion-fetch" type="submit" class="menu-bar" onclick="boldDiscussion()"><i class="fa fa-comment"></i><b> Discussion</b></button>
                    <button id="Roster" name="roster-fetch" type="submit" class="menu-bar" onclick="boldRoster()"><i class="fa fa-user"></i> Roster</button>
                    <div id="Media" class="menu-bar" onclick="boldMedia()"><i class="fa fa-image"></i> Media</div>
                    <div style="width:20%"></div>
                </div>
            </form>


            <div id="course-thumbnail-container" class="course-thumbnail-container" style="font-weight:bold">

                <div id="course-info">
                    <span id="course-name" class="course-name">
                        CS 221
                    </span>
                    <div id="course-section" class="course-section">
                        Section B
                    </div>
                    <div id="course-prof" class="course-prof">
                        Anonymous Professor
                    </div>

                </div>
            </div>

            <div id="post-container" style="overflow-y:scroll;">
                <?php include("functions.php"); ?>
            </div>
        </div>

        <div class="block" id="column-iii">
            <div id="description-box">

                <div id="newPostsHeader">
                    New Posts</div>

                <div id="allNewPosts">

                    <div class="newPostsSection">
                        <div class="datePost">02/19/24 - him</div>
                        <div style="font-size:0.8em">
                            did you know that at least 1 out of every 10 women will die one day. that means that 9/10
                            won't. this is a problem i think we all need to addres as a socitie.
                        </div>
                    </div>

                    <div class="newPostsSection">
                        <div class="datePost">02/19/24 - Emily Schmemily</div>

                        <div class="linkPost">
                            <img class="favicon" src='https://icons.duckduckgo.com/ip3/www.github.com.ico'>

                            <span class="newPostText">
                                <a href="https://www.github.com/" target="_blank">GitHub Repository</a>
                            </span>

                        </div>
                        <div style="font-size:0.8em">
                            Here's the repository the teacher used in class today
                        </div>

                    </div>

                    <div class="newPostsSection">
                        <div class="datePost">02/17/24 - Jacobson Markleson</div>

                        <div class="imagePost">
                            <span>
                                can someone help me anansi is fucking me raw in the asshole rn and im so angry i could
                                hit someone.
                            </span>
                            <img src='https://lh3.googleusercontent.com/drive-viewer/AEYmBYStMwvVUTu5hVt-4QkA7psO1lpSdqz_2PbUG9RWUOeRg2zKb27GT2NAVFeLxraocsB8KzvZB2l8GXJfRjhE-jxNAMipbA=s2560'
                                class="imagePostImage">
                        </div>
                    </div>

                    <div class="newPostsSection">
                        <div class="datePost">02/13/24 - Anonymous</div>

                        <div class="linkPost">
                            <img class="favicon" src='https://icons.duckduckgo.com/ip3/www.quizlet.com.ico'>

                            <span class="newPostText">
                                <a href="https://www.quizlet.com/" target="_blank">ELA Study Guide Unit 7</a>
                            </span>
                        </div>

                    </div>

                    <div class="newPostsSection">
                        <div class="datePost">02/02/24 - Dad</div>

                        <div class="linkPost">
                            <img class="favicon" src='https://icons.duckduckgo.com/ip3/www.google.com.ico'>

                            <span class="newPostText">
                                <a href="https://www.google.com/" target="_blank">my favorite website ;)</a>
                            </span>
                        </div>

                    </div>

                    <div class="newPostsSection">
                        <div class="datePost">01/19/24 - that one kid</div>

                        <div class="imagePost">
                            <span>
                                Hello! I just really wanted to post an image of BTS so I did!
                            </span>
                            <img src='https://hips.hearstapps.com/hmg-prod/images/gettyimages-1097661412.jpg?crop=0.665xw:1.00xh;0.173xw,0&resize=1200:*'
                                class="imagePostImage">
                        </div>
                    </div>
                </div>

                <div id="col2img">
                    <img src="https://lh3.googleusercontent.com/drive-viewer/AEYmBYRraH5nSwmXFQHvIV9Qhw3yP40rXMYb2wa3YEVB2WgckIgZ6BJsGfzwtv0U_koLA4GjAGyIh40HVV2VfKKKvjgYozXL=s1600"
                        style="width:100%;height:width;">
                </div>

            </div>



            <div id="post-thumbnail-container">
                <div class="media">
                    <div class="media-title"></div>
                </div>

                <div class="media">
                    <div class="media-title"></div>
                </div>
            </div>
        </div>

        <div id="createPost" style="margin:1000px">
            <form method="post">
                <div class="createPostText">
                    <i class="fa fa-bookmark"></i>
                    <span class="createPostHeader">New Post</span>

                    <span class="createPostSelector"
                        style="margin:5%;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                        <select id="mySelect" name="selected-course" style="background-color:rgb(240,240,240);border-radius:6px;">
                            <option> CS 221</option>
                            <option> EQ</option>
                            <option> Algebra I</option>
                            <option> Theater</option>
                        </select>

                        <button onclick="newPostBringback()"
                            style="padding:5px;margin-left:15px;border-radius:5px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Cancel
                        </button>
                        <button onclick="newPostBringback()" type="submit" name="discussion-append"
                            style="padding:5px;border-radius:5px;background-color:white;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Post
                        </button>
                </div>

                <textarea id="postText" name="post-content" rows="9%" cols="47%" wrap="soft"> </textarea>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>