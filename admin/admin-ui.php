<div class="si-css-admin wrap">
    <h1 class="si-title"><?php esc_html_e('Studio Immens CSS Classes', 'studio-immens-css-classes'); ?>
        <a href="https://studioimmens.com/css-class-pro" class="immens-btn"><?php esc_html_e('View Pro Features', 'studio-immens-css-classes'); ?></a>
    </h1>
    <div class="si-form-container">
        <div class="si-form-column">
            <div class="si-form-box">
                <h2><?php esc_html_e('Add New CSS Class', 'studio-immens-css-classes'); ?> <input type="button" id="clear" class="immens-btn" value="Clear"> </h2>
                
                <form id="si-css-form">
                    <input type="hidden" id="edit-or-not" value="no">
                    <input type="hidden" id="class-id">
                    <div class="si-form-group">
                        <label for="class-name"><?php esc_html_e('Class Name', 'studio-immens-css-classes'); ?></label>
                        <input type="text" id="class-name" required>
                        <small><?php esc_html_e('Without dot (e.g. "my-class")', 'studio-immens-css-classes'); ?></small>
                    </div>
                    
                    <div class="si-form-group">
                        <label for="class-css"><?php esc_html_e('Class Code', 'studio-immens-css-classes'); ?></label>
                        <textarea id="class-css" rows="5" required></textarea>
                    </div>

                    <div class="si-form-group">
                        <label for="hover-css"><?php esc_html_e('Class :hover', 'studio-immens-css-classes'); ?></label>
                        <textarea id="hover-css" rows="5"></textarea>
                    </div>

                    <div class="si-form-group">
                        <label for="focus-css"><?php esc_html_e('Class :focus', 'studio-immens-css-classes'); ?></label>
                        <textarea id="focus-css" rows="5"></textarea>
                    </div>
                    
                    <button type="submit" class="button button-primary button-large">
                        <?php esc_html_e('Save Class', 'studio-immens-css-classes'); ?>
                    </button>
                </form>

            </div>
        </div>
        
        <div class="si-preview-column">
            <div class="si-preview-box">
                <h2><?php esc_html_e('Live Preview', 'studio-immens-css-classes'); ?></h2>
                <div class="si-preview-controls">
                    <label>
                        <input type="checkbox" id="si-live-preview" checked>
                        <?php esc_html_e('Enable Live Preview', 'studio-immens-css-classes');?>
                    </label>
                    <input type="button" id="remove-class" class="immens-btn" value="Clear">
                    <div class="si-preview-class"></div>
                </div>
                <div id="si-dummy-content" class="si-dummy-content">
                    <?php esc_html_e('Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry.', 'studio-immens-css-classes'); ?><br>
                    <div>div Element</div>
                    <p>p Element</p>
                    <i>i Element</i>
                    <b>b Element</b>
                    <span>span Element</span>
                    <strong>strong Element</strong>
                    <button>button Element</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="si-classes-list">
        <h2><?php esc_html_e('Your CSS Classes', 'studio-immens-css-classes'); ?></h2>
        
        <div class="si-list-controls">
            <div class="si-search-box">
                <input type="text" id="si-class-search" placeholder="<?php esc_html_e('Search classes...', 'studio-immens-css-classes'); ?>">
                <!-- <button id="si-class-import" class="immens-btn"><?php esc_html_e('Import', 'studio-immens-css-classes');?></button>
                <button id="si-class-export" class="immens-btn"><?php esc_html_e('Export', 'studio-immens-css-classes');?></button> -->
            </div>
            <div class="si-stats">
                <span id="si-classes-count">0</span> <?php esc_html_e('classes', 'studio-immens-css-classes'); ?>
            </div>
        </div>
        
        <div id="si-classes-container" class="si-classes-grid">
            <!-- Le classi verranno caricate qui dinamicamente -->
        </div>
    </div>
</div>