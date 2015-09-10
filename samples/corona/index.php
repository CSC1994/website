<!-- $Id$ -->
<?php
	 include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<img align="right" src="/samples/corona/Trace_171_20050908.jpg" width="250" height="200" border="1" hspace="20" ALT="Image: TRACE/NASA; EUV emission of the solar corona above an active region">
<h2>Highlight:</h2>

<h3>Coronal heating problem</h3>

<p>The corona of the Sun was observed to be very hot, which is since then rather unexplained.
Large-scale 3D-MHD models can nowadays test whole scenarios for coronal heating theories in computational models.
With the Pencil Code, one such numerical experiment was performed on several German-national and European-international super computers (like Curie in France and JuRoPA in Germany).
This model run consumed in total about 20 million CPU-core hours on Intel Nehalem processors and ran typically on 1024 cores simultaneously.
To enable this research, efficient massive-parallel communication and file-input/output was implemented in the Pencil Code in the recent years.</p>

<p>To model the coronal heating properly, it is important to include also the energy sinky, e.g. by radiative losses or heat conduction that usually transports energy back to the lower atmosphere.
From the slef-consistently computed plasma density and temperature we synthesize data with an atomic database (CHIANTI) that can directly compared to real extreme-UV observations of the corona (upper right: TRACE/NASA).</p>

<p><img src="/samples/corona/EM-MAG-Pz.png" width="660" height="242" border="0" ALT="EUV emission; photospheric magnetogram with loops field lines; vertical Poynting flux"></p>

<p>We show here a view from top onto the coronal model that features several hot loops with extreme-UV emission in the spectral lines of, e.g., Fe XV (red, left panel), which is generated by million Kelvin hot plasma.
This emission clearly follows, as expected, the magnetic field (lines, middle panel), because the heat conduction is very efficient parallel to the magnetic field lines.
As responsible for the coronal energy input, we could identify the vertical Poynting flux into the corona (blue/red = positive/negative, right panel), that is caused by horizontal shuffling motions from photospheric granulation.
These motions avect the footpoints of magnetic field lines in the photosphere, where the plasma beta is large and hence the so-called field-line braiding mechanism injects magnetic energy from below.
While these magnetic disturbances travel into the corona they may induce electric currents, which eventually heat the plasma by Ohmic dissipation.</p>

<p>The model is driven by an active regeion magnetogram observed in the photosphere (black/gray/white, middle panel) and reproduces well observations of the corona.
This explains the magnetic energy input and yields to realistic coronal heating in the active region core.</p>

References:
<ul>
	<li>Bourdin et al. (2013), A&amp;A 555, A123 (<a href="http://adsabs.harvard.edu/abs/2013A%26A...555A.123B">ADS</a>, DOI: <a href="http://dx.doi.org/10.1051/0004-6361/201321185">10.1051/0004-6361/201321185</a>)</li>
	<li>Bourdin et al. (2014), PASJ 66, S7&nbsp;&nbsp;&nbsp;&nbsp; (<a href="http://adsabs.harvard.edu/abs/2014PASJ...66S...7B">ADS</a>, DOI: <a href="http://dx.doi.org/10.1093/pasj/psu123">10.1093/pasj/psu123</a>)</li>
	<li>Bourdin et al. (2015), A&amp;A 580, A72&nbsp;&nbsp; (<a href="http://adsabs.harvard.edu/abs/2015A%26A...580A..72B">ADS</a>, DOI: <a href="http://dx.doi.org/10.1051/0004-6361/201525839">10.1051/0004-6361/201525839</a>)</li>
</ul>

</div>
<?php
	include "inc/footer.inc";
 ?>

