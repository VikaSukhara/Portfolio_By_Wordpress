<?php
$experience_title = get_field('experience_title');
$experience_description = get_field('experience_description');
$work_experience = get_field('work_experience');

// Переконуємося, що work_experience існує і є масивом
if (!empty($work_experience) && is_array($work_experience)) :

    // Оновлюємо масив компаній з правильними ключами
    $companies = [
        !empty($work_experience['company__1']) ? $work_experience['company__1'] : null,
        !empty($work_experience['company__2']) ? $work_experience['company__2'] : null,
        !empty($work_experience['company_3']) ? $work_experience['company_3'] : null
    ];
?>

<section id="about">
<div class="experience-section">
        <?php if (!empty($experience_title)) : ?>
            <h2 class="experience-title"><?php echo esc_html($experience_title); ?></h2>
        <?php endif; ?>

        <?php if (!empty($experience_description)) : ?>
            <p class="experience-description"><?php echo esc_html($experience_description); ?></p>
        <?php endif; ?>


        <div class="work-container">

            <?php foreach ($companies as $company) : ?>
                <?php if (!empty($company) && isset($company['company_name'])) : ?>
                    <div class="experience-item">
                        <div class="company">
                            <h2 class="company_name"> <?php echo esc_html($company['company_name']); ?></h2>
                            <p class="period"><?php echo esc_html($company['period']); ?></p>
                        </div>

                        <div class="timeline">
                            <div class="job">

                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="30" height="30" rx="15" fill="white" />
                                    <rect x="1" y="1" width="30" height="30" rx="15" stroke="#DCDFE5" stroke-width="2" stroke-dasharray="2 2" />
                                    <circle cx="16" cy="16" r="5" fill="#DCDFE5" />
                                </svg>
                                <div>
                                    <h3 class="job_title"><?php echo esc_html($company['job_title']); ?></h3>
                                    <p class="job_description"><?php echo esc_html($company['job_description']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<?php endif; ?>