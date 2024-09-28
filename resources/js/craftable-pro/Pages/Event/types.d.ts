import type { UploadedFile } from "craftable-pro/types";

export type Event = {
    id: string | number; 
title: string; 
content: string; 
slug: string; 
published_at: string; 
club_id: integer; 
category_id: integer; 
created_at: string; 
updated_at: string
    media?: UploadedFile[];
};

export type EventForm = {
    title: string; 
content: string; 
slug: string; 
published_at: string; 
club_id: integer; 
category_id: integer; 
image: Array<UploadedFile>
};
