Requirements
=============

$ docker-compose --version
docker-compose version 1.13.0, build 1719ceb

$ docker --version
Docker version 17.05.0-ce, build 89658be

$ ansible --version
ansible 2.3.0.0


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
