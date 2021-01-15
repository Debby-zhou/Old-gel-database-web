# Old gel database web
## 網站架構
```
biomimicry_website/
  |___www/
       |___project/
              |___data/
                    |___index.html
                    |___parameter.php
                    |___score.php
                    |___foldchange.php
                    |___data_analysis.php
                    |___cell_images.php
                    |___ctvalues.php
                      |___controls.php
                      |___ectoderm.php
                      |___endoderm.php
                      |___mesendoderm.php
                      |___mesoderm.php
                      |___others.php
                      |___self_renewal.php             
```
## 未來進展
* Server
  * Dockerfile
      * python3.7
      * django
      * mod_wgsi
  * Docker-compose (containers)
      * debby-mariadb
      * debby-djangoapache
* Website
  * Bootstrap4 template 
