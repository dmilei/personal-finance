FROM node:lts-alpine AS local

ENV APP_DIR=dashboard
ENV WORKDIR=/usr/src/$APP_DIR

# set app serving to permissive / assigned
ENV HOST=0.0.0.0
# set app port
ENV PORT=6001

WORKDIR $WORKDIR

# copy the app
COPY $APP_DIR/ $WORKDIR/

RUN npm ci
RUN npm rebuild node-sass
RUN npm run build

# expose port on container
EXPOSE $PORT

# start the app
CMD [ "npm", "start" ]
