
<div class="home_container">

<div class="home_title">Computer Vision <span style="font-size: 12pt;">(CMU 16-385)</span> </div>

<div>
<img style="padding-bottom: 5px;" src="https://16385.courses.cs.cmu.edu/spring2026/assets/images/banner.png" width="800"></a>
</div>

<p style="padding-bottom: .15em"> This course provides a comprehensive
introduction to computer vision. Major topics include image processing,
detection and recognition, geometry-based and physics-based vision and
video analysis. Students will learn basic concepts of computer vision
as well as hands on experience to solve real-life vision problems.  </p>

<div class="overview_main_item overview_ruled_element">Basic Info</div>

<div style="padding-bottom: 15px;">
<div>Mon/Wed 12:30pm-1:50pm</div>
<div>Tepper 1403</div>
<div>Instructor: <a href="https://www.cs.cmu.edu/~motoole2/">Matthew O'Toole</a></div>
<div style="padding-top:1em;">See the <a href="<?php echo site_url('courseinfo'); ?>">Course Info</a> page for more info on policies and logistics.</div>
</div>

<div class="overview_main_item overview_ruled_element">Getting Started</div>

To get started with the class you need to do just three things:
<ol>
<li><a href="https://piazza.com/cmu/spring2026/16385">Sign up</a> for the course Piazza.</li>
<li><a href="https://16385.courses.cs.cmu.edu/spring2026/users/create">Sign up</a> for an account on this webpage.  (The signup code is on Canvas.)</li>
                                                                                                                  <li>Carefully read through the <a href="<?php echo site_url('courseinfo'); ?>">Course Info</a>.</li>
                                                                                                                </ol>

<div class="overview_main_item overview_ruled_element">Spring 2026 Schedule</div>

<table>

<?php

function lecture_def($date, $title, $link, $fmt='', $extras=array()) {
    return array('date' => $date,
                 'title' => $title,
                 'link' => $link,
                 'format' => $fmt,
                 'deadlines' => $extras);
}

/*
 * ======================================================================
 * =========== BEGIN LECTURES ARRAY =====================================
 * ======================================================================
 * 
 * Make a list of lectures here:
 *
 * Format of lecture_def() is:
 *     - Date of lecture (as a string)
 *     - Lecture Name
 *     - Url for lecture (If the lecture has been given, this is link to lecture summary page, else it's just '')
 *     - optional formatting options (only 'bold' is supported)
 *     - Array of sublines (often used for due dates)
 *
 * Here are some examples:
 * 
 * A lecture with a url:
 *    lecture_def('Jan 12', 'Why Parallelism?', lecture_url('whyparallelism'))
 * 
 * A lecture with no url since the lecture has not been given yet:
 *    lecture_def('Jan 12', 'Why Parallelism?', '', 'bold')
 *
 * More complicated:
 *
 * A lecture with multiple assignment due dates on the same day:
 *    lecture_def('Jan 21', 'Parallel Programming Models and their Corresponding HW/SW Implementations', lecture_url('progmodels'), '',
 *                array('Quiz 1 due (on Thu Jan 22)', 'Assignment 1 due (on Fri Jan 23)') )
 *
 * =======================================================================
 */

$lectures = array(

     lecture_def('Jan 12 (Mon)', 'Course Introduction', lecture_url('intro'), 'bold'),
                  
     lecture_def('Jan 14 (Wed)', 'Image Filtering', lecture_url('filtering'), 'bold', array('Assignment 0 out')),

     lecture_def('Jan 19 (Mon)', 'NO CLASS (MLK Jr Day)', '',
                 'bold'),
                     
     lecture_def('Jan 21 (Wed)', 'Image Pyramids and Frequency Domain', lecture_url('pyramids'), 'bold', array('Assignment 0 DUE', 'Assignment 1 out')),
     
     lecture_def('Jan 26 (Mon)', 'Hough Transform', lecture_url('hough'), 'bold'),
     
     lecture_def('Jan 28 (Wed)', 'Detecting Corners', lecture_url('corners'), 'bold'),
                     
     lecture_def('Feb 2 (Mon)', 'Feature Detectors and Descriptors', lecture_url('features'), 'bold'),
   
     lecture_def('Feb 4 (Wed)', '2D Transformations', lecture_url('transformations'), 'bold', array('Assignment 1 DUE', 'Assignment 2 out')),
                     
     lecture_def('Feb 9 (Mon)', 'Image Homographies', lecture_url('homographies'), 'bold'),
                     
     lecture_def('Feb 11 (Wed)', 'Geometric Camera Models', lecture_url('cameras'), 'bold'),
                     
     lecture_def('Feb 16 (Mon)', 'Geometric Camera Models (cont.)', lecture_url('cameras2'), 'bold'),
                     
     lecture_def('Feb 18 (Wed)', 'Two-View Geometry', lecture_url('stereogeometry'), 'bold', array('Assignment 2 DUE', 'Assignment 3 out')),
                     
     lecture_def('Feb 23 (Mon)', 'Stereo', lecture_url('stereo'), 'bold'),
                     
     lecture_def('Feb 25 (Wed)', 'Image Classification', lecture_url('bow'),
                 'bold'),
                     
     lecture_def('Mar 2 (Mon)', 'NO CLASS (Spring Break)', '',
                 'bold'),
   
     lecture_def('Mar 4 (Wed)', 'NO CLASS (Spring Break)', '',
                 'bold'),
   
     lecture_def('Mar 9 (Mon)', 'Image Classification (cont.)', lecture_url('bow'),
                 'bold'),
                     
     lecture_def('Mar 11 (Wed)', 'Neural Networks', lecture_url('nn'),
                 'bold', array('Assignment 3 DUE', 'Assignment 4 out')),
                     
     lecture_def('Mar 16 (Mon)', 'Neural Networks (cont.)', lecture_url('nn'),
                 'bold'),
                     
     lecture_def('Mar 18 (Wed)', 'Convolutional Neural Networks', lecture_url('cnn'),
                 'bold'),
                     
     lecture_def('Mar 23 (Mon)', 'Optical Flow', lecture_url('flow'),
                 'bold'),
                     
     lecture_def('Mar 25 (Wed)', 'Alignment and Tracking', lecture_url('track'),
                 'bold', array('Assignment 4 DUE', 'Assignment 5 out')),
                     
     lecture_def('Mar 30 (Mon)', 'Alignment and Tracking (cont.)', lecture_url('track'),
                 'bold'),
                     
     lecture_def('Apr 1 (Wed)', 'Radiometry and Reflectance', lecture_url('radiometry'),
                 'bold'),
                     
     lecture_def('Apr 6 (Mon)', 'Radiometry and Reflectance (cont.)', lecture_url('radiometry'),
                 'bold'),
                     
     lecture_def('Apr 8 (Wed)', 'Photometric Stereo', lecture_url('photometricstereo'),
                 'bold', array('Assignment 5 DUE', 'Assignment 6 out')),
                     
     lecture_def('Apr 13 (Mon)', 'Digital Photography', lecture_url('photography'),
                 'bold'),
                     
     lecture_def('Apr 15 (Wed)', 'Digital Photography (cont.)', lecture_url('photography'),
                 'bold'),
   
     lecture_def('Apr 20 (Mon)', 'Special Topics', '',
                 'bold'),
   
     lecture_def('Apr 22 (Wed)', 'Wrap-up', lecture_url('wrapup'),
                 'bold'),

     lecture_def('Apr 24 (Fri)', '', '',
                 'bold', array('Assignment 6 DUE')),
  );


/*
 * ===================================================================
 * =========== END OF LECTURES ARRAY =================================
 * ===================================================================
 */


foreach ($lectures as $lecture)
{

?>

<tr>
<td class="schedule_date">
     <?php echo $lecture['date']; ?>
</td>

<td class="schedule_lecture">
     <div>
     <?php if (strlen($lecture['link']) > 0) { ?>

        <a href="<?php echo $lecture['link']; ?>"><?php echo $lecture['title']; ?></a>

     <?php } else { ?>

      <?php if ($lecture['format'] == 'bold') { ?>
           <span class="bold_text"><?php echo $lecture['title']; ?></span>
      <?php } else { ?>
        <?php echo $lecture['title']; ?>
     <?php } ?>

     <?php } ?>
     </div>

     <?php if (count($lecture['deadlines']) > 0) {
        foreach($lecture['deadlines'] as $deadline) { ?>
     <div class="small_text colored_text">
     <?php echo $deadline; ?>
     </div>
     <?php } } ?>

</td>

</tr>

<?php
}
?>

</table>

<div class="overview_main_item overview_ruled_element">Assignments</div>

<table>
<tr>
<td class="schedule_date">(Due Jan 21st)</td><td class="schedule_lecture"><a href="https://16385.courses.cs.cmu.edu/spring2026/assets/assignments/assgn0.pdf">Programming Assignment 0: Introduction to Python</a></td>
</tr>
</table>

<table>
<tr>
<td class="schedule_date">(Due Feb 4th)</td><td class="schedule_lecture"><a href="https://16385.courses.cs.cmu.edu/spring2026/assets/assignments/assgn1.zip">Programming Assignment 1: Image Filtering and Hough Transform</a></td>
</tr>
</table>

<table>
<tr>
<td class="schedule_date">(Due Feb 18th)</td><td class="schedule_lecture"><a href="https://16385.courses.cs.cmu.edu/spring2026/assets/assignments/assgn2.zip">Programming Assignment 2: Augmented Reality with Planar Homographies</a></td>
</tr>
</table>

<!--
<table>
<tr>
<td class="schedule_date">(Due Oct 2)</td><td class="schedule_lecture">Programming Assignment 2: Augmented Reality with Planar Homographies</td>
</tr>
</table>

<table>
<tr>
<td class="schedule_date">(Due Oct 23)</td><td class="schedule_lecture">Programming Assignment 3: 3D Reconstruction</td>
</tr>
</table>

<table>
<tr>
<td class="schedule_date">(Due Nov 6)</td><td class="schedule_lecture">Programming Assignment 4: Scene Recognition with Bag of Words</td>
</tr>
</table>

<table>
<tr>
<td class="schedule_date">(Due Nov 20)</td><td class="schedule_lecture">Programming Assignment 5: Neural Networks for Recognition</td>
</tr>
</table>


<table>
<tr>
<td class="schedule_date">(Due Dec 6)</td><td class="schedule_lecture">Programming Assignment 6: Video Tracking</td>
</tr>
</table>
-->

<!--

<div class="overview_main_item overview_ruled_element">Quizzes</div>

<table>

<tr>
<td class="schedule_date">(Due Sept 19th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/mpfjgxtgjgxg">Quiz 1: Convolutions and Fourier transforms</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Sept 26th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/gtxpzprkhbdr">Quiz 2: Corners and Covariance Matrices</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Oct 3rd)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/bnmchgkdyrkp">Quiz 3: Transformations, Heterogeneous, and Homogeneous Coordinates</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Oct 10th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/swzngbnchgnx">Quiz 4: Camera Projection Matrices</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Oct 24th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/cfwdqrwgwdwk">Quiz 5: Essential and Fundamental Matrices</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Oct 31st)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/pmmbytxdwrhw">Quiz 6: Fundamental Matrices (cont.) and Nearest Neighbors</a></td>
</tr>


<tr>
<td class="schedule_date">(Due Nov 7th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/trpnkhjjvsmm">Quiz 7: Neural Networks</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Nov 14th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/ztkqgwxhrqnm">Quiz 8: Neural Networks (cont.) and Optical flow</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Nov 21st)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/sggggkxtmpyk">Quiz 9: Image Alignment</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Nov 30th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/gdyskjyswfgn">Quiz 10: Radiometry and Reflectance</a></td>
</tr>

<tr>
<td class="schedule_date">(Due Dec 7th)</td><td class="schedule_lecture"><a href="https://www.overleaf.com/read/qfdvxxygxqvf">Quiz 11: Photometric Stereo</a></td>
</tr>

-->
</table>


<!--
<tr>
<td class="schedule_date">(Due Sep 28th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz2.pdf'); ?>">Quiz 2: Corners and Covariance Matrices</a> (<a href="<?php echo base_url('assets/quizzes/quiz2.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Oct 5th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz3.pdf'); ?>">Quiz 3: Heterogeneous and Homogeneous Coordinates</a> (<a href="<?php echo base_url('assets/quizzes/quiz3.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Oct 12th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz4.pdf'); ?>">Quiz 4: Camera Projection Matrices</a> (<a href="<?php echo base_url('assets/quizzes/quiz4.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Oct 19th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz5.pdf'); ?>">Quiz 5: Essential and Fundamental Matrices</a> (<a href="<?php echo base_url('assets/quizzes/quiz5.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Oct 27th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz6.pdf'); ?>">Quiz 6: Reflectance and Photometric Stereo</a> (<a href="<?php echo base_url('assets/quizzes/quiz6.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Nov 2nd)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz7.pdf'); ?>">Quiz 7: Minnaert BRDF Model</a> (<a href="<?php echo base_url('assets/quizzes/quiz7.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Nov 10th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz8.pdf'); ?>">Quiz 8: Nearest Neighbors</a> (<a href="<?php echo base_url('assets/quizzes/quiz8.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Nov 16th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz9.pdf'); ?>">Quiz 9: Neural Networks</a> (<a href="<?php echo base_url('assets/quizzes/quiz9.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Nov 24th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz10.pdf'); ?>">Quiz 10: Optical Flow</a> (<a href="<?php echo base_url('assets/quizzes/quiz10.tex'); ?>">LaTeX source</a>)</td>
</tr>
<tr>
<td class="schedule_date">(Due Nov 30th)</td><td class="schedule_lecture"><a href="<?php echo base_url('assets/quizzes/quiz11.pdf'); ?>">Quiz 11: Image Alignment</a> (<a href="<?php echo base_url('assets/quizzes/quiz11.tex'); ?>">LaTeX source</a>)</td>
</tr>
</table>
-->

<div class="overview_main_item overview_ruled_element">Acknowledgments</div>

<p> The lecture notes have been pieced together from many different
people and places. Special thanks to colleagues for sharing their
slides: David Held, Kris Kitani, Bob Collins, Srinivasa Narashiman, Martial Hebert,
Alyosha Efros, Ali Faharadi, Deva Ramanan, Yaser Sheikh, and Todd Zickler.
Many thanks also to the following people for making their lecture notes and
materials available online: Steve Seitz, Richard Selinsky, Larry Zitnick,
Noah Snavely, Lana Lazebnik, Kristen Grauman, Yung-Yu Chuang, Tinne Tuytelaars,
Fei-Fei Li, Antonio Torralba, Rob Fergus, David Claus, and Dan Jurafsky.  </p>

<div>&nbsp;</div>
<div>&nbsp;</div>

</div>  <!-- end of home_container -->
