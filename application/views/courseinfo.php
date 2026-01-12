
<?php

function make_url($first, $second) {
  return $first . '/' . $second;
}

?>

<div class="home_container">

<div class="home_title">Computer Vision <span style="font-size: 12pt;">(CMU 16-385)</span> </div>

<div>CMU 16-385, Spring 2024</div>
<div>Mon/Wed 12:30pm-1:50pm</div>
<div>WEH 7500</div>
     <div style="padding-bottom: 20px;">Instructor: <a href="http://www.cs.cmu.edu/~motoole2">Matthew O'Toole</a></div>

<div class="overview_main_item overview_ruled_element">Course Description</div>

<p>
This course provides a comprehensive
introduction to computer vision. Major topics include image processing,
detection and recognition, geometry-based and physics-based vision and
video analysis. Students will learn basic concepts of computer vision
as well as hands on experience to solve real-life vision problems.
</p>

<div class="overview_main_item overview_ruled_element">Instructor</div>

<div class="indented_block">

<div style="width: 360px; float: left;">
<img src="<?php echo base_url('assets/images/staff/motoole.png'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div><a href="http://www.cs.cmu.edu/~motoole2">Matthew O'Toole</a></div>
<div>[motoole2 at andrew] </div>
<div><b>Office:</b> Smith Hall 215</div>
<div><b>Office hours:</b> Friday, 2-4pm</div>
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>


<div class="overview_minor_item" style="clear: both; padding-top: 2em; padding-bottom: 2em;">Your fun and helpful TAs:</div>

<div style="width: 360px; float: left;">
<img src="<?php echo base_url('assets/images/staff/shubhika.jpg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name"><a href="">Shubhika Garg</a></div>
<div>[shubhikg at andrew]</div>
<div><b>Office hours:</b> Monday 3:30-5:30pm (NSH 1109)</div>
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>

<div style="width: 360px; float: left;">
<img src="<?php echo base_url('assets/images/staff/tahaseen.jpg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name"><a href="">Tahaseen Shaik</a></div>
<div>[tshaik at andrew]</div>
<div><b>Office hours:</b> Monday 5:30-7:30pm (NSH 1109)</div>
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>

<div style="width: 360px; float: left;">
<img src="<?php echo base_url('assets/images/staff/zhinan.jpg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name"><a href="">Zhinan (Sam) Wang</a></div>
<div>[zhinanw at andrew]</div>
<div><b>Office hours:</b> Tuesday 10-noon (NSH 1109)</div>
<div style="clear: both;">&nbsp;</div>
</div>


<div style="clear: both;">&nbsp;</div>

<div style="width: 360px; float: left;">
<img src="<?php echo base_url('assets/images/staff/jinhyung_park.png'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name"><a href="">Jinhyung (David) Park</a></div>
<div>[jinhyun1 at andrew]</div>
<div><b>Office hours:</b> Tuesday 1-3pm (NSH 1109)</div>
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>

<div style="width: 360px; float: left;">
<img src="<?php echo base_url('assets/images/staff/felipe.jpg'); ?>" width="100" height="100" style="float: left; margin-right: 20px; border: #808080 1px solid;" />
<div class="ta-name"><a href="">Felipe Zanforlin Mautner</a></div>
<div>[fmautner at andrew]</div>
<div><b>Office hours:</b> Thursday 3:30-5:30pm (NSH 4513)</div>
<div style="clear: both;">&nbsp;</div>
</div>

<div style="clear: both;">&nbsp;</div>k

</div> <!-- indented -->

<div class="overview_main_item overview_ruled_element">Prerequisites</div>

<p>This course requires familiarity with linear algebra, calculus,
basic probability, as well as programming. In particular, the
following courses serve as prerequisite:</p>
<ul>
<li>"Mathematical Foundations of Electrical Engineering" (18-202) and "Principles of Imperative Computation" (15-122) </li>
</ul>
<p>OR</p>
<ul>
<li>"Matrices and Linear Transformations" (21-241) and "Calculus in Three Dimensions" (21-259) and "Principles of Imperative Computation" (15-122) </li>
</ul>

<div class="overview_main_item overview_ruled_element">Textbook</div>

<p>Readings will be assigned from the following textbook (available online for free):</p>
<ul>
<li><a href="http://szeliski.org/Book/">Computer Vision: Algorithms and Applications</a>, by Richard Szeliski.
</li>
</ul>
<p>Additional readings will be assigned from relevant papers. Readings will be posted on the website.</p>
<p>The following textbooks can also be useful references for different parts of the class, but are not required:</p>
<ul>
<li><i>Multiple View Geometry in Computer Vision,</i> by Richard Hartley and Andrew Zisserman.</li>
<li><i>Computer Vision: A Modern Approach,</i> by David Forsyth and Jean Ponce.</li>
<li><i>Digital Image Processing,</i> by Rafael Gonzalez and Richard Woods.</li>
</ul>


<div class="overview_main_item overview_ruled_element">Evaluation</div>

<p>Your final grade will be made up from:</p>
<ul>
<li>Six programming assignments (98%).</li>
<li>Class participation (2%).</li>
</ul>
<p><strong>Programming assignments:</strong> Programming assignments (PAs) will require implementing a significant computer vision algorithm. Some of them will also have a small theory component relevant to the implementation. Programming will be done in Python.</p>
<p><strong>Late days:</strong> For the programming assignments, students will be allowed a total of <strong>six</strong> free late days. Any additional late days will each incur a 10% penalty.  Assignments submitted four days after the initial due date will receive a grade of zero.</p>
<p><strong>Submitting homework:</strong> We use the Gradescope menu link in <a href="https://canvas.cmu.edu/courses/40004/">Canvas</a> for submitting and grading homeworks.</p>
<p><strong>Accommodations for Students with Disabilities:</strong> If you have a disability and have an accommodations letter from the Disability Resources office, I encourage you to discuss your accommodations and needs with me as early in the semester as possible. I will work with you to ensure that accommodations are provided as appropriate. If you suspect that you may have a disability and would benefit from accommodations but are not yet registered with the Office of Disability Resources, I encourage you to contact them at <a href=mailto:access@andrew.cmu.edu>access@andrew.cmu.edu</a>.



<div class="overview_main_item overview_ruled_element">Discussion</div>

<p> We use <a href="https://piazza.com/cmu/spring2024/16385a/home">Piazza</a> for class discussion and announcements.</p>

<div class="overview_main_item overview_ruled_element">Collaboration Policy</div>

<p> Students in 16-385 are absolutely encouraged to talk to each other,
to the TAs, to the instructors, or to anyone else about course assignments.
Any assistance, though, must be limited to discussion of the problems and
sketching general approaches to a solution. Each student must write their
own code and produce their own writeup.

<span class="bold_text">Consulting another student's
solution, or solutions from the internet, is prohibited on assignments.
These and any other form of collaboration constitute cheating.</span>
If you have any question about whether some activity
would constitute cheating, just be cautious and ask the instructor
before proceeding!</p>

<p> You may not supply code or assignment writeups you
complete during 16-385 to other students in future instances of
this course or make these items available (e.g., on the web) for use
in future instances of this course (just as you may not use work
completed by students who've taken the course previously).  We
encourage you to use public source control hosts like <a
href="http://www.github.com">Github</a> for your assignments, however
please be sure to make your programming assignment repositories private.</p>

<div class="overview_main_item overview_ruled_element">Diversity Statement</div>
                       
<p><b>We must treat every individual with respect.</b> We are diverse in many ways,
and this diversity is fundamental to building and maintaining an equitable
and inclusive campus community. Diversity can refer to multiple ways that
we identify ourselves, including but not limited to race, color, national
origin, language, sex, disability, age, sexual orientation, gender identity,
religion, creed, ancestry, belief, veteran status, or genetic information.
Each of these diverse identities, along with many others not mentioned here,
shape the perspectives our students, faculty, and staff bring to our campus.
We, at CMU, will work to promote diversity, equity and inclusion not only
because diversity fuels excellence and innovation, but because we want to
pursue justice. We acknowledge our imperfections while we also fully commit
to the work, inside and outside of our classrooms, of building and sustaining
a campus community that increasingly embraces these core values.</p>
                                    
<p>Each of us is responsible for creating a safer, more inclusive environment.</p>
                                    
<p>Unfortunately, incidents of bias or discrimination do occur, whether
intentional or unintentional. They contribute to creating an unwelcoming
environment for individuals and groups at the university. Therefore, the
university encourages anyone who experiences or observes unfair or hostile
treatment on the basis of identity to speak out for justice and support,
within the moment of the incident or after the incident has passed. Anyone
can share these experiences using the following resources:</p>
                  
<ul>
<li><b>Center for Student Diversity and Inclusion:</b> <a href="mailto:csdi@andrew.cmu.edu">csdi@andrew.cmu.edu</a>, (412) 268-2150</li>
<li><b>Report-It online anonymous reporting platform:</b> <a href="reportit.net">reportit.net</a>, username: <i>tartans</i>, password: <i>plaid</i></li>
</ul>

<p>All reports will be documented and deliberated to determine if there should be any following actions. Regardless of incident type, the university will use all shared experiences to transform our campus climate to be more equitable and just.</p>
                                    
<p>&nbsp;</p>

</div>
