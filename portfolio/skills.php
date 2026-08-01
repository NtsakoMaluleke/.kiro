<?php
/**
 * Page 3 – Skills
 * Updated with additional technical skills from academic transcript.
 */
$pageTitle = 'Skills | Ntsako Maluleke';

$technicalSkills = [
  // Core from CV
  ['name' => 'Java',                      'icon' => '☕', 'note' => 'Programming & Data Structures'],
  ['name' => 'C++',                       'icon' => '⚙️',  'note' => 'Procedural & Systems Programming'],
  ['name' => 'HTML / Web Dev',            'icon' => '🌐', 'note' => 'Web Development & eCommerce'],
  ['name' => 'Linux',                     'icon' => '🐧', 'note' => 'Linux-based Operating Systems'],
  ['name' => 'Cloud Computing',           'icon' => '☁️',  'note' => 'Cloud Based Technologies'],
  ['name' => 'Project Management',        'icon' => '📋', 'note' => 'IT Project Management'],
  // From transcript
  ['name' => 'Network Security',          'icon' => '🔐', 'note' => 'Computer Network & Security'],
  ['name' => 'Database Systems',          'icon' => '🗄️',  'note' => 'Database Design & Management'],
  ['name' => 'Mobile App Development',    'icon' => '📱', 'note' => 'Mobile Apps & Big Data'],
  ['name' => 'Software Engineering',      'icon' => '🛠️',  'note' => 'Architecture, Design & QA'],
  ['name' => 'AI & Ethics',               'icon' => '🤖', 'note' => 'AI Ethics and Privacy'],
  ['name' => 'OOP & Systems Analysis',    'icon' => '🧩', 'note' => 'Object Oriented Systems Design'],
  ['name' => 'Usability Engineering',     'icon' => '🎨', 'note' => 'UX & Interface Design'],
  ['name' => '4IR Technologies',          'icon' => '🚀', 'note' => 'Fourth Industrial Revolution'],
  ['name' => 'Research & Methodology',    'icon' => '🔬', 'note' => 'Research Design & Methodology'],
  ['name' => 'Microsoft Office',          'icon' => '💼', 'note' => 'Computer Skills (Microsoft)'],
];

$softSkills = [
  'Research &amp; Analysis',
  'Time Management',
  'Works Under Pressure',
  'Problem Solving',
  'Adaptability',
  'Communication',
  'Critical Thinking',
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

<main class="page-wrapper">

  <!-- Technical Skills -->
  <h2 class="section-title">Technical Skills</h2>

  <div class="skills-grid">
    <?php foreach ($technicalSkills as $skill): ?>
    <div class="skill-card fade-in">
      <div class="skill-icon"><?php echo $skill['icon']; ?></div>
      <div class="skill-name"><?php echo $skill['name']; ?></div>
      <div class="skill-note"><?php echo $skill['note']; ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- Professional / Soft Skills -->
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
