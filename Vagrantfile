# -*- mode: ruby -*-
# vi: set ft=ruby :

require 'yaml'

VAGRANTFILE_API_VERSION ||= "2"
confDir = $confDir ||= File.expand_path("vendor/laravel/homestead", File.dirname(__FILE__))

confFile = File.expand_path("vagrant.yaml", File.dirname(__FILE__))

require File.expand_path(confDir + '/scripts/homestead.rb')

Vagrant.require_version '>= 2.2.4'

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

    if File.exist? confFile then
        settings = YAML::load(File.read(confFile))
    else
        abort "Settings file not found in " + File.dirname(__FILE__)
    end

    Homestead.configure(config, settings)

    if Vagrant.has_plugin?('vagrant-hostsupdater')
        config.hostsupdater.aliases = settings['sites'].map { |site| site['map'] }
    elsif Vagrant.has_plugin?('vagrant-hostmanager')
        config.hostmanager.enabled = true
        config.hostmanager.manage_host = true
        config.hostmanager.aliases = settings['sites'].map { |site| site['map'] }
    end
end
