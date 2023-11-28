#!/bin/bash
rsync -avz --delete --exclude='_variables.scss' /home/lohengrin/dbwebb-kurser/design/me/portfolio/themes/kmom04/scss/partials/* /home/lohengrin/dbwebb-kurser/design/me/portfolio/themes/kmom04/scss/partials-dark
