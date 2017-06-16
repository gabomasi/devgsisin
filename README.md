Requirements
=============

Ansible >= 2.0

Then:

```
sudo ansible-galaxy install angstwad.docker_ubuntu
```

TODO:
====
- Install sentry
- Install http://kanban.leanlabs.io/docs/installation/docker.html


taigalocal
==========

ansible-playbook -i hosts taigalocal.yml --ask-vault --extra-vars="{ 'taiga_data_path': 'PATH_TO_LOCAL_TAIGA_DATA' }"
