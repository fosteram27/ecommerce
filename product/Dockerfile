FROM python:3.11.4
COPY . /usr/src/app
COPY requirements.txt /tmp/requirements.txt
COPY rest.py /tmp/rest.py
RUN python3 -m pip install -r /tmp/requirements.txt
CMD ["python", "/tmp/rest.py"]