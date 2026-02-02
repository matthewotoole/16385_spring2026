
<div class="home_container">

<div class="home_title">Computer Vision <span style="font-size: 12pt;">(CMU 16-385)</span> </div>

<p>This page contains a list of <a href="https://colab.research.google.com/">Colab notebooks</a> associated with the <a href="<?php echo site_url('lectures'); ?>">lectures</a>.  You can also look through the <a href="https://github.com/matthewotoole/16385_fall2020_notebooks">notebook repository on github</a>.</p>

<div class="overview_main_item overview_ruled_element">Notebooks and Interactive Demos</div>

<p>
<div><b>Lecture 1:</b> Introduction to Numpy</div>
<ul>
<li><a href="https://colab.research.google.com/github/matthewotoole/16385_fall2020_notebooks/blob/master/Numpy_Quick_Tour_Helper.ipynb">Notebook</a></li>
</ul>
</p>

<p>
<div><b>Lecture 2:</b> Image Filtering</div>
<ul>
<li><a href="https://colab.research.google.com/github/matthewotoole/16385_fall2020_notebooks/blob/master/Lecture_2.ipynb">Notebook</a></li>
<li><a href="https://setosa.io/ev/image-kernels/">Demo of Image Kernels</a></li>
</ul>
</p>

<p>
<div><b>Lecture 3:</b> Image Pyramids and Frequency Domain</div>
<ul>
<li><a href="https://colab.research.google.com/github/matthewotoole/16385_fall2020_notebooks/blob/master/Lecture_3.ipynb">Notebook</a></li>
<li><a href="http://www.jezzamon.com/fourier/index.html">Demo of Fourier Transforms</a></li>
</ul>
</p>


<p>
<div><b>Lecture 4:</b> Hough Transforms</div>
<ul>
<li><a href="https://www.aber.ac.uk/~dcswww/Dept/Teaching/CourseNotes/current/CS34110/hough.html">Demo of Hough Transform</a></li>
</ul>
</p>

<p>
<div><b>Lecture 6:</b> Detectors and Descriptors</div>
<ul>
<li><a href="https://colab.research.google.com/github/matthewotoole/16385_fall2020_notebooks/blob/master/Lecture_6.ipynb">Notebook</a></li>
</ul>
</p>

<p>
<div><b>Lecture 7:</b> 2D Transformations</div>
<ul>
<li><a href="https://colab.research.google.com/github/matthewotoole/16385_fall2020_notebooks/blob/master/Lecture_7.ipynb">Notebook</a></li>
<li><a href="https://ncase.me/matrix/">Demo of Affine Transformations</a></li>
</ul>
</p>

<p>
<div><b>Lecture 9:</b> Geometric Camera Models</div>
<ul>
<li><a href="https://colab.research.google.com/github/matthewotoole/16385_fall2020_notebooks/blob/master/Lecture_9.ipynb">Notebook</a></li>
<li><a href="https://www.khanacademy.org/computing/pixar/virtual-cameras/virtual-cameras-1/a/simple-pinhole-camera">Demo of Pinhole Camera</a></li>
</ul>
</p>

<p>
<div><b>Lecture 13 &amp; 14:</b> Image Classification</div>
<ul>
<li><a href="https://www.naftaliharris.com/blog/visualizing-k-means-clustering/">Visualizing K-Means Clustering</a></li>
<li><a href="http://vision.stanford.edu/teaching/cs231n-demos/knn/">K-Nearest Neighbors Demo</a></li>
<li><a href="http://vision.stanford.edu/teaching/cs231n-demos/linear-classify/">Linear Classification Loss Visualization</a></li>
</ul>
</p>

<p>
<div><b>Lecture 15 &amp; 16:</b> Neural Networks</div>
<ul>
<li><a href="https://playground.tensorflow.org/">Neural Network Playground</a></li>
<li><a href="https://cs.stanford.edu/people/karpathy/convnetjs/demo/classify2d.html">ConvnetJS demo</a></li>
</ul>
</p>


<p>
<div><b>Lecture 17:</b> Convolutional Neural Networks</div>
<ul>
<li><a href="https://cs.stanford.edu/people/karpathy/convnetjs/demo/mnist.html">MNIST demo</a></li>
</ul>
</p>

<!--
<div class="overview_main_item overview_ruled_element">Self-Check Exercises</div>

<p>
<div><a href="<?php echo $exercises_base_url . '/exercise1.pdf'; ?>">Exercise 1: A Task Queue + The Professor with the Most ALUs (Sometimes) Wins</a></div>
<div class="small_text colored_text">Concepts tested: multi-core architecture, hardware multi-threading</div>
</p>

<p>
<div><a href="<?php echo $exercises_base_url . '/exercise2.pdf'; ?>">Exercise 2: A Yinzer Processor Pipeline + Data Parallel Histograms + SIMD Tree Search</a></div>
<div class="small_text colored_text">Concepts tested: pipelining, data-parallel programming, SIMD execution</div>
</p>

<p>
<div><a href="<?php echo $exercises_base_url . '/exercise3.pdf'; ?>">Exercise 3: Pixel Processing in Parallel + Particle Processing</a></div>
<div class="small_text colored_text">Concepts tested: optimizing parallel code, workload imbalance, synchronization, false sharing</div>
</p>

<p>
<div><a href="<?php echo $exercises_base_url . '/exam1practice.pdf'; ?>">Exam 1 Practice Exercises</a></div>
<div class="small_text colored_text">Concepts tested: everything up to Exam 1</div>
</p>

<p>
<div><a href="<?php echo $exercises_base_url . '/exercise4.pdf'; ?>">Exercise 4: Miscellaneous Problems + Concurrent Hashtables</a></div>
<div class="small_text colored_text">Concepts tested: scheduling/elasticity, multi-threading, fine-grained locking</div>
</p>

<p>
<div><a href="<?php echo $exercises_base_url . '/exercise5.pdf'; ?>">Exercise 5: Transactions on Trees + Interconnects</a></div>
<div class="small_text colored_text">Concepts tested: transactional memory, interconnect design, routing, fine-grained locking</div>
</p>

<p>
<div><a href="<?php echo $exercises_base_url . '/exercise6.pdf'; ?>">Exercise 6: Seeing How the Studying is Going + Controlling DRAM</a></div>
<div class="small_text colored_text">Concepts tested: scheduling Spark programs, how DRAM works</div>
</p>


<div class="overview_main_item overview_ruled_element">Programming Assignments</div>

<p>
<div><a href="<?php echo article_url('3'); ?>">Assignment 1: Analyzing Parallel Program Performance on an Eight-Core CPU</a></div>
</p>

<p>
<div><a href="<?php echo article_url('4'); ?>">Assignment 2: A Simple CUDA Renderer</a></div>
</p>

<p>
<div><a href="<?php echo article_url('7'); ?>">Assignment 3: Processing Big Graphs on the Xeon Phi</a></div>
</p>

<p>
<div><a href="<?php echo article_url('15'); ?>">Assignment 4: A Simple, Parallel Webserver</a></div>
</p>
-->

<p>&nbsp;</p>

</div>


