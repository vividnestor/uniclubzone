

export type ClubPage = {
    id: string | number; 
title: string; 
content: string; 
slug: string; 
published_at: string; 
craftable_pro_users_id: integer; 
club_id: integer; 
created_at: string; 
updated_at: string
    
};

export type ClubPageForm = {
    title: string; 
content: string; 
slug: string; 
published_at: string; 
craftable_pro_users_id: integer; 
club_id: integer
};
