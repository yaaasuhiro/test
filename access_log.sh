#!/bin/bash
zcat /var/log/apache2/access_log.20150824.gz | grep 404 | wc -l