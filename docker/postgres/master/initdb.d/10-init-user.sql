CREATE ROLE gbook_role;

CREATE ROLE gbook_app WITH LOGIN PASSWORD 'secret';

GRANT gbook_role TO gbook_app;
