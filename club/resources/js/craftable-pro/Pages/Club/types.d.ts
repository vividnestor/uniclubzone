import type { UploadedFile } from "craftable-pro/types";

export type Club = {
    id: string | number; 
name: string; 
description: string; 
active: boolean; 
delete_flag: boolean; 
published_at: string; 
craftable_pro_users_id: integer; 
created_at: string; 
updated_at: string
    media?: UploadedFile[];
};

export type ClubForm = {
    name: string; 
description: string; 
active: boolean; 
delete_flag: boolean; 
published_at: string; 
craftable_pro_users_id: integer; 
image: Array<UploadedFile>
};
