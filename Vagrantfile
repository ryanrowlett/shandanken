# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    # Box
    config.vm.box = "ubuntu/trusty64"

    # Shared Folders
    config.vm.synced_folder "./", "/vagrant",
        owner: "vagrant",
        group: "www-data",
        mount_options: ["dmode=775,fmode=664"]

    # Provisioning
    config.vm.provision :shell, :inline => "apt-get update --fix-missing"
    config.vm.provision :shell, :inline => "apt-get install -q -y python-software-properties python"
    config.vm.provision :shell, :inline => "add-apt-repository ppa:ondrej/php && apt-get update"
    config.vm.provision :shell, :inline => "apt-get install -q -y figlet g++ make git curl apache2 libapache2-mod-php7.0 php7.0-curl php7.0-cli php7.0-gd php7.0-mbstring"
    config.vm.provision :shell, :inline => "sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf"
    config.vm.provision :shell, :inline => "sudo a2enmod rewrite"
    config.vm.provision :shell, :inline => "sudo a2enmod expires"
    config.vm.provision :shell, :inline => "sudo a2enmod php7.0"
    config.vm.provision :shell, :inline => "service apache2 restart"

    # Change Apache Working Directory
    config.vm.provision :shell, :inline => "rm -rf /var/www/html"
    config.vm.provision :shell, :inline => "ln -fs /vagrant /var/www/html"

    # Create virtual host
    config.vm.network :private_network, ip: "192.168.84.111"
    config.vm.hostname = "hf.dev"

    # Done
    config.vm.provision :shell, :inline => "figlet SUCCESS"

end