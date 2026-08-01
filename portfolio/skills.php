<?php
/**
 * Page 3 – Skills
 */
$pageTitle = 'Skills | Ntsako Maluleke';

$technicalSkills = [
  ['name' => 'Java',             'icon' => '☕'],
  ['name' => 'C++',              'icon' => '⚙️'],
  ['name' => 'HTML',             'icon' => '🌐'],
  ['name' => 'Linux',            'icon' => '🐧'],
  ['name' => 'Cloud Computing',  'icon' => '☁️'],
  ['name' => 'Project Mgmt',     'icon' => '📋'],
];

$softSkills = [
  'Research &amp; Analysis',
  'Time Management',
  'Works Under Pressure',
  'Problem Solving',
  'Adaptability',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php include 'includes/nav.php'; ?>

<!-- Hero -->
<header class="hero">
  <h1>Skills</h1>
  <p class="subtitle">Technical &amp; professional capabilities</p>
</header>

<!-- Content -->
<main class="page-wrapper">

  <!-- Technical Skills -->
  <h2 class="section-title">Technical Skills</h2>

  <div class="skills-grid">
    <?php foreach ($technicalSkills as $skill): ?>
    <div class="skill-card fade-in">
      <div class="skill-icon"><?php echo $skill['icon']; ?></div>
      <div class="skill-name"><?php echo $skill['name']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Soft Skills -->
  <h2 class="section-title" style="margin-top:3rem;">Professional Skills</h2>

  <div class="soft-skills">
    <?php foreach ($softSkills as $soft): ?>
    <span class="soft-tag fade-in"><?php echo $soft; ?></span>
    <?php endforeach; ?>
  </div>

</main>

<?php include 'includes/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>
